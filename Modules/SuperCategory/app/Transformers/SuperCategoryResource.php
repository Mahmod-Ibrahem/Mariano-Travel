<?php

namespace Modules\SuperCategory\App\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuperCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public static $wrap = false;
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
