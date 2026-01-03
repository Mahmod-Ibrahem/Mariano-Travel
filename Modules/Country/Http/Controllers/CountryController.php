<?php

namespace Modules\Country\Http\Controllers;

use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index($slug)
    {
        $country = \Modules\Country\Entities\Country::where("slug->" . app()->getLocale(), $slug)->firstOrFail();

        $tours = $country->tours()->paginate(1);

        $countries = \Modules\Country\Entities\Country::where('is_active', true)->withCount('categories')->get();

        return view('country::index', compact('country', 'tours', 'countries'));
    }
}
