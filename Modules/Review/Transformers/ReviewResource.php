<?php

namespace Modules\Review\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public static $wrap = false;

    public function toArray(Request $request): array
    {
        $locale = request('locale', app()->getLocale());
        return [
            'id' => $this->id,
            'reviewer' => $this->getTranslation('reviewer', $locale),
            'title' => $this->getTranslation('title', $locale),
            'content' => $this->getTranslation('content', $locale),
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
        ];
    }
}
