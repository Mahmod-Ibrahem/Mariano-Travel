<?php

namespace Modules\SuperCategory\App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Modules\SuperCategory\App\Models\SuperCategory;

class SuperCategoryService
{
    /**
     * Cache key prefix for super category listings
     */
    private const CACHE_KEY_PREFIX = 'super_categories_listing';

    /**
     * Cache TTL in seconds (24 hours)
     */
    private const CACHE_TTL = 86400;

    /**
     * Get all super categories with their related categories, products, and tours
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllSuperCategoriesWithRelations()
    {
        return Cache::remember(
            self::CACHE_KEY_PREFIX,
            self::CACHE_TTL,
            function () {
                return SuperCategory::with([
                    'categories',
                    'categories.products' => fn($query) => $query->where('bulk', false),
                    'categories.tours',
                ])->get();
            }
        );
    }


    public function getFoodAndDrinks()
    {
        $superCategories = $this->getAllSuperCategoriesWithRelations();
        return $superCategories->firstWhere('name', 'food-drinks');
    }

    public function getTours()
    {
        $superCategories = $this->getAllSuperCategoriesWithRelations();
        return $superCategories->firstWhere('name', 'tours');
    }

    /**
     * Get bulk products
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getBulkProducts()
    {
        return Cache::remember(
            self::CACHE_KEY_PREFIX . '_bulk_products',
            self::CACHE_TTL,
            function () {
                return Product::where('bulk', true)->get();
            }
        );
    }

    /**
     * Clear all cache related to super category listings
     *
     * @return void
     */
    public function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY_PREFIX);
        Cache::forget(self::CACHE_KEY_PREFIX . '_bulk_products');
    }
}
