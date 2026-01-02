<?php

namespace Modules\Shared\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Modules\SuperCategory\App\Models\SuperCategory;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Safe when migrations not run yet
        if (! Schema::hasTable('super_categories')) {
            View::share('superCategories', collect());
            return;
        }

        View::share('superCategories', SuperCategory::select('id', 'name', 'slug')->get());
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
