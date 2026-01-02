<?php

namespace Modules\Review\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\Review\Entities\Review;
use Modules\Review\Http\Requests\ReviewRequest;
use Modules\Review\Transformers\ReviewListResource;
use Modules\Review\Transformers\ReviewResource;

class ReviewController extends Controller
{
    public function index()
    {
        $SortField = request('sortField', 'created_at');
        $SortDirection = request('sortDirection', 'asc');
        $search = request('search');
        $perPage = request('perPage', 10);

        $reviews = Review::query()
            ->with(['tour'])
            ->orderBy($SortField, $SortDirection);

        if ($search) {
            $reviews->where(function ($query) use ($search) {
                $query->where('title->' . app()->getLocale(), 'LIKE', "%$search%")
                    ->orWhere('content->' . app()->getLocale(), 'LIKE', "%$search%")
                    ->orWhere('reviewer->' . app()->getLocale(), 'LIKE', "%$search%");
            });
        }

        return ReviewListResource::collection($reviews->paginate($perPage));
    }

    public function show(Review $review)
    {
        $review->load('tour');
        return new ReviewResource($review);
    }


    public function update(ReviewRequest $request, Review $review)
    {
        $validatedData = $request->validated();

        $review->setTranslation('title', app()->getLocale(), $validatedData['title']);
        $review->setTranslation('content', app()->getLocale(), $validatedData['content']);
        $review->setTranslation('reviewer', app()->getLocale(), $validatedData['reviewer']);

        $review->save();

        return new ReviewResource($review);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(ReviewRequest $request)
    {
        $validatedData = $request->validated();

        $review = new Review();
        $review->setTranslation('title', app()->getLocale(), $validatedData['title']);
        $review->setTranslation('content', app()->getLocale(), $validatedData['content']);
        $review->setTranslation('reviewer', app()->getLocale(), $validatedData['reviewer']);

        $review->save();

        return new ReviewResource($review);
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return response()->noContent();
    }
}
