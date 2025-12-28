<?php


namespace Modules\Booking\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Modules\Booking\Http\Requests\BookingRequest;
use Modules\Tour\Entities\Tour;
use Modules\PayPal\Services\PayPalService;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Booking\Entities\TourBooking;
use Modules\Tour\Service\TourService;
use Modules\Booking\Notifications\BookingNotification;


class BookingController extends Controller
{
    public function __construct(protected TourService $tourService) {}
    public function store($tour, BookingRequest $request)
    {
        $data = $request->validated();
        $tour = $this->tourService->getTourBySlug($tour);
        $data['price_per_adult'] = $this->determinePriceBasedOnPeopleCount($data['adults'], $tour);
        $totalPrice = $this->calculateTotalPrice($data['price_per_adult'], $data['adults'], $data['children']);

        $data['total_price'] = $totalPrice;
        $data['start_date'] = (new DateTime($data['start_date']));

        DB::beginTransaction(); {
            $booking = $this->createBooking($data, $tour);
            DB::commit();
        }
        if ($data['payment_method'] === 'paypal') {
            $paypalService = app(PayPalService::class);
            return $this->handlePayPalPayment($paypalService, $totalPrice, $tour, $booking->id);
        }
        $users = User::where('is_admin', true)->get();
        Notification::send($users, new BookingNotification($tour, $booking));
        // Optional: Uncomment if you want to notify
        // Mail::to($data['email'])->send(new \App\Mail\InformUserForBookingMail());
        return view('booking::success', [
            'text' => 'Your tour is booked! We will contact you soon',
            'thanks' => 'Thanks For Booking With Us',
        ]);
    }


    private function calculateTotalPrice(float $pricePerAdult, int $adults, int $children): float
    {
        return ($adults * $pricePerAdult) + ($children * $pricePerAdult * 0.5);
    }

    private function determinePriceBasedOnPeopleCount(int $count, Tour $tour): float
    {
        return match (true) {
            $count < 2 => (float)$tour->price_per_person,
            $count <= 5 => (float)$tour->price_two_five,
            default => (float)$tour->price_six_twenty,
        };
    }

    private function createBooking(array $data, Tour $tour): TourBooking
    {
        return TourBooking::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'adults' => $data['adults'],
            'children' => $data['children'],
            'country' => $data['country'],
            'hotel' => $data['hotel'],
            'total_price' => $data['total_price'],
            'tour_id' => $tour->id,
            'start_date' => $data['start_date'],

        ]);
    }

    private function handlePaypalPayment(PaypalService $paypalService, float $totalPrice, Tour $tour)
    {
        $purchaseUnit = $this->formatPaypalPurchaseUnit($totalPrice, $tour);
        $response = $paypalService->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success'),
                "cancel_url" => redirect()->back()->getTargetUrl(),
            ],
            "purchase_units" => $purchaseUnit,
        ]);

        if (isset($response['id'])) {
            return redirect()->to(($response['links'][1]['href']));
        }
        dd($response);

        return redirect()->back()->with('error', 'Something went wrong try again');
    }

    private function formatPaypalPurchaseUnit(float $totalPrice, Tour $tour): array
    {
        return
            [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => number_format($totalPrice, 2, '.', ''),
                        "breakdown" => [
                            "item_total" => [
                                "currency_code" => "USD",
                                "value" => number_format($totalPrice, 2, '.', ''),
                            ],
                        ],
                    ],
                    "items" => [
                        [
                            "name" => $tour->title,
                            "quantity" => 1,
                            "unit_amount" => [
                                "currency_code" => "USD",
                                "value" => number_format($totalPrice, 2, '.', ''),
                            ],
                        ],
                    ],
                ]
            ];
    }
}
