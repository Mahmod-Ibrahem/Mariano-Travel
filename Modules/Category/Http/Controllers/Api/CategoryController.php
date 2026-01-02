<?php

namespace Modules\Category\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ImagesUtility;
use Illuminate\Support\Facades\Storage;
use Modules\Category\Entities\Category;
use Modules\Category\Http\Requests\CategoryRequest;
use Modules\Category\Transformers\CategoryListResource;
use Modules\Category\Transformers\CategoryResource;
use Modules\Shared\Trait\helper;

class CategoryController extends Controller
{
    use  ImagesUtility, helper;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = request('locale', 'en');
        // Filter categories that have translation for the given locale
        $categories = Category::all()->filter(function ($category) use ($locale) {
            return $category->hasTranslation('name', $locale);
        });

        return CategoryListResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();
        $storedImage = $this->storeImage($validatedData['image'], 'category');

        $category = new Category();
        $category->type = $validatedData['type'];
        $category->country_id = $validatedData['country_id'];
        $category->image = $storedImage;

        $locale = $validatedData['locale'];
        $this->setTranslations($category, $validatedData, $locale);

        $category->save();

        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, $category)
    {
        $validatedData = $request->validated();
        // $validatedData = $this->getNotEmptyValues($validatedData);
        $category = Category::findOrFail($category);
        if ($validatedData['image'] ?? false) {
            if ($category->image) {
                $relativePath = $this->getRelativePath($category->image);
                if (Storage::exists($relativePath)) {
                    Storage::delete($relativePath);
                }
            }
            $validatedData['image'] = $this->storeImage($validatedData['image'], 'category');
        }
        $category->update($validatedData);

        return response()->json(['message' => 'Category updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        if ($category->image) {
            $relativePath = $this->getRelativePath($category->image);
            if (Storage::exists($relativePath)) {
                Storage::delete($relativePath);
            }
        }
        $category->delete();
        return response()->noContent();
    }





    private function setTranslations(Category $category, array $data, string $locale)
    {
        $translatableFields = ['name', 'header', 'bg_header', 'description', 'title_meta', 'description_meta'];

        // Handle slug generation if name is present
        if (isset($data['name'])) {
            $slug = \Illuminate\Support\Str::slug($data['name']);
            $category->setTranslation('slug', $locale, $slug);
        }

        foreach ($translatableFields as $field) {
            if (isset($data[$field])) {
                $value = $data[$field];
                if ($field === 'description') {
                    $value = str_replace('target="_blank"', '', $value);
                }
                $category->setTranslation($field, $locale, $value);
            }
        }
    }
}
