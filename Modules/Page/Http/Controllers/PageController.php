<?php

namespace Modules\Page\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Review\Entities\Review;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        $reviews = Review::all();
        return view('about', compact('reviews'));
    }
    public function services()
    {
        return view('page::services');
    }
}
