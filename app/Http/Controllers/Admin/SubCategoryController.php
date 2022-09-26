<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('Admin.SubCategory.index');
    }

    public function create()
    {
        return view('Admin.SubCategory.create');
    }

    public function store(SubCategoryRequest $request, SubCategory $subCategory)
    {
        $subCategory->create($request->validated());

        return redirect()
            ->route('sub-category.index')
            ->with('success', 'Sub Category created successfully');
    }

    public function edit(SubCategory $subCategory)
    {
        return view('Admin.SubCategory.edit')
            ->with([
                'subCategory' => $subCategory,
                'categories' => Category::query()->get()
            ]);
    }

    public function update(SubCategoryRequest $request, SubCategory $subCategory)
    {
        $subCategory->update($request->validated());

        return redirect()
            ->route('sub-category.index')
            ->with('success', 'Sub Category updated successfully');
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();

        return redirect()
            ->route('sub-category.index')
            ->with('success', 'Sub Category deleted successfully');
    }
}
