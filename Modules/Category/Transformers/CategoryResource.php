<?php

namespace Modules\Category\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'type' => $this->type,
            'header' => $this->header,
            'description' => $this->description,
            'bg_header' => $this->bg_header,
            'name' => $this->name,
            'image_url' => asset($this->image),
            'title_meta' => $this->title_meta,
            'description_meta' => $this->description_meta,
            'country_id' => $this->country_id,
            'country' => $this->country ? [
                'id' => $this->country->id,
                'name' => $this->country->name
            ] : null,
        ];
    }
}
