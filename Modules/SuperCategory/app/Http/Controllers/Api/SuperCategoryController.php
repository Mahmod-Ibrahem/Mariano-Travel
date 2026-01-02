<?php

namespace Modules\SuperCategory\App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Modules\SuperCategory\App\Http\Requests\SuperCategoryRequest;
use Modules\SuperCategory\App\Models\SuperCategory;
use Modules\SuperCategory\App\Transformers\SuperCategoryResource;

class SuperCategoryController extends Controller
{
    public function index()
    {
        $search = request('search');
        $sortField = request('sort_field', 'id');
        $sortDirection = request('sort_direction', 'desc');
        $perPage = request('perPage', 20);

        $query = SuperCategory::query()
            ->when($search, function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            })
            ->orderBy($sortField, $sortDirection);

        return SuperCategoryResource::collection($query->paginate($perPage));
    }

    public function show(SuperCategory $super_category)
    {
        return SuperCategoryResource::make($super_category);
    }

    public function store(SuperCategoryRequest $request)
    {
        SuperCategory::create($request->all());
        return response()->json('Success', 201);
    }

    public function update(SuperCategoryRequest $request, SuperCategory $super_category)
    {
        $super_category->update($request->all());
        return response()->json('Success', 200);
    }

    public function destroy(SuperCategory $super_category)
    {
        $super_category->delete();
        return response()->json('Success', 200);
    }
}
