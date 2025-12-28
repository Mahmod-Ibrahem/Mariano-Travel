<?php

namespace Modules\PayPal\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\PayPal\Entities\PaypalPayment;
use Illuminate\Http\Request;
use Modules\Booking\Entities\TourBooking;
use Modules\Booking\Enums\BookingPayment;
use Modules\Booking\Enums\BookingStatus;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PaypalController extends Controller
{
    public function successPayment(Request $request)
    {
        $bookingId = $request->query('booking_id');
        $provider = new PayPalClient();
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->query('token')); // returned token from paypal after user payment
        if (isset($response['status']) && $response['status'] === 'COMPLETED') {
            $exists = PaypalPayment::where('order_id', $response['id'])->exists();
            if (!$exists) {
                PaypalPayment::create([
                    'order_id' => $response['id'],
                    'capture_id' => $response['purchase_units'][0]['payments']['captures'][0]['id'],
                    'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
                    'currency' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'],
                    'status' => $response['status'],
                    'tour_booking_id' => $bookingId
                ]);
            }
            TourBooking::where('id', $bookingId)->update([
                'status' => BookingStatus::Completed
            ]);
            return view('booking::success', [
                'text' => 'Your tour is booked! We will contact you soon',
                'thanks' => 'Thanks For Booking With Us',
            ]);
        }
        return view('booking::payment-failed');
    }

    public function cancelPayment(Request $request)
    {
        $bookingId = $request->query('booking_id');
        $booking = TourBooking::where('id', $bookingId)->first();
        $booking->update([
            'status' => BookingStatus::Cancelled
        ]);
        $tour = $booking->tour;
        return view('booking::payment-failed', compact('tour'));
    }
}
