<?php

namespace Modules\Booking\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class BookingResource extends JsonResource
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
            'name' => $this->full_name,
            'email' => $this->email,
            'start_date' => $this->start_date,
            'total_price' => $this->total_price,
            'country' => $this->country,
            'adult' => $this->adults,
            'children' => $this->children,
            'payment_method' => $this->payment_method,
            'tour_id' => $this->tour_id,
            'tour_group' => $this->tour->group,
            'tour_title' => $this->tour->title,

        ];
    }
}
