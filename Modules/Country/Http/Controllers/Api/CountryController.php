<?php

namespace Modules\Country\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ImagesUtility;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Modules\Country\Entities\Country;
use Modules\Country\Http\Requests\CountryRequest;
use Modules\Country\Transformers\CountryResource;

class CountryController extends Controller
{
    use ImagesUtility;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request('search');
        $locale = app()->getLocale();

        $query = Country::where("name->$locale", '!=', null)
            ->when($search, function ($q, $search) use ($locale) {
                $q->where("name->$locale", 'LIKE', "%{$search}%");
            });


        return CountryResource::collection($query->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $this->storeImage($validatedData['image'], 'countries');
        }

        $country = Country::create($validatedData);

        return new CountryResource($country);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);
        return new CountryResource($country);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryRequest $request, $id)
    {
        $validatedData = $request->validated();
        $country = Country::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($country->image) {
                $relativePath = $this->getRelativePath($country->image);
                if (Storage::exists($relativePath)) {
                    Storage::delete($relativePath);
                }
            }
            $country->image = $this->storeImage($validatedData['image'], 'countries');
        }

        $country->is_active = $validatedData['is_active'];
        $country->route_name = $validatedData['route_name'];
        $country->setTranslation('name', $validatedData['locale'] ?? app()->getLocale(), $validatedData['name']);
        $country->save();

        return response()->json(['message' => 'Country updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return response()->noContent();
    }
}
