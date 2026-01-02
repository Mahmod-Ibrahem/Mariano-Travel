<?php

namespace Modules\Tour\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Category\Services\CategoryService;
use Modules\Country\Services\CountryService;
use Modules\Tour\Service\TourService;
use Modules\Tour\Traits\TourUtility;

class DayTourController extends Controller
{
    use TourUtility;

    public function __construct(
        protected TourService $tourService,
        protected CategoryService $categoryService,
        protected CountryService $countryService
    ) {}

    public function index()
    {
        $countryName = request('country');

        $categories = $countryName
            ? $this->categoryService->getCategoriesByCountrySlug($countryName)
            : $this->categoryService->getCategoriesByType('day-tours');

        $countries = $this->countryService->getActiveCountriesWithCategoryCount();

        return view('tour::day-tour-index', compact('categories', 'countries'));
    }

    public function view($category)
    {
        [$tours, $category] = $this->tourService->getToursAndCategoryByCategoryType($category);
        return view('tour::view', compact('tours', 'category'));
    }

    public function show($category, $tour)
    {
        $tour = $this->tourService->getTourBySlug($tour);
        $this->tourService->storeIp(request()->ip(), $tour->id);
        return view('tour::tour', compact('tour'));
    }
}
