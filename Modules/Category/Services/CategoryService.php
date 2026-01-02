<?php

namespace Modules\Category\Services;

use Modules\Category\Entities\Category;

class CategoryService
{
    public function getCategoriesByType($type)
    {
        return Category::whereHas('tours')->where('type', $type)
            ->withCount('tours')
            ->get();
    }

    public function getCategoriesByCountrySlug($countrySlug)
    {
        return Category::whereHas('country', function ($query) use ($countrySlug) {
            $query->where('slug', $countrySlug);
        })
            ->whereHas('tours')
            ->withCount('tours')
            ->with('country')->get();
    }
}
