<?php

namespace Modules\Country\Services;

use Modules\Country\Entities\Country;

class CountryService
{
    public function getActiveCountriesWithCategoryCount()
    {
        return Country::withCount('categories')->where('is_active', 1)->get();
    }

    public function getCountryByName($name)
    {
        return Country::where('name->' . app()->getLocale(), $name)->first();
    }
}
