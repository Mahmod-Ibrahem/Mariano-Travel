<?php

namespace Modules\Tour\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Itenary\Transformers\ItenaryResource;

class TourResource extends JsonResource
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
            'group' => $this->group,
            'category_id' => $this->category->id ?? null,
            'country_id' => $this->category->country_id ?? null,
            'preference' => $this->preference,
            'title' => $this->title,
            'description' => $this->description,
            'highlights' => $this->highlights,
            'included' => $this->inclusions->pluck('id'),
            'excluded' => $this->exclusions->pluck('id'),
            'locations' => $this->locations->pluck('id'),
            'itenary' => ItenaryResource::collection($this->itenaries),
            'price_per_person' => $this->price_per_person,
            'tour_cover' => asset($this->tour_cover),
            'price_two_five' => $this->price_two_five,
            'price_six_twenty' => $this->price_six_twenty,
            'duration' => $this->duration,
            'tour_images' => $this->images->map(function ($image) {
                return [
                    'id' => $image->id,
                    'path' => asset($image->path),
                    'tours_id' => $image->tours_id,
                ];
            }),
            'video_url' => $this->video_url,
            'is_bookable' => (bool) $this->is_bookable,
        ];
    }
}
