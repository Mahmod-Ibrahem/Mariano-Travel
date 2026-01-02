<?php

namespace Modules\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Transformers\BlogResource;
use Modules\Category\Entities\Category;
use Modules\Country\Entities\Country;
use Modules\Gallery\Entities\Gallery;
use Modules\Gallery\Transformers\GalleryResource;
use Modules\Location\Entities\Location;
use Modules\Review\Entities\Review;
use Modules\Tour\Service\TourService;

class HomeController extends Controller
{

    public function __construct(protected TourService $tourService) {}

    public function home()
    {
        $popularTours = $this->tourService->getTourByPreference('popular');
        $locations = Location::all();
        $galleries = GalleryResource::collection(Gallery::all());
        $blogs = BlogResource::collection(Blog::all());
        $reviews = Review::all();
        $countries = Country::all();
        $categories = Category::all();
        return view('home::index', compact('reviews',  'locations', 'popularTours', 'galleries', 'blogs', 'countries', 'categories'));
    }
}
