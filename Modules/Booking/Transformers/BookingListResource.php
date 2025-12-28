<?php

namespace Modules\Booking\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = false;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'start_date' => $this->start_date,
            'total_price' => $this->total_price,
            'tour_title' => $this->tour->title,
            'country' => $this->country,
            'adults' => $this->adults,
            'children' => $this->children,
            'payment_method' => $this->payment_method,
            'status' => $this->status,
        ];
    }
}
