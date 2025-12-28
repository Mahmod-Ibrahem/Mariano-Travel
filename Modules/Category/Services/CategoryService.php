<?php

namespace Modules\Category\Services;

use Modules\Category\Entities\Category;

class CategoryService
{
    public function getCategoriesByType($type)
    {
        return Category::whereHas('tours')->where('type', $type)->get();
    }
}
