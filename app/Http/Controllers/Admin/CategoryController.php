<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Admin.Category.index');
    }

    public function create()
    {
        return view('Admin.Category.create');
    }

    public function store(CategoryRequest $request, Category $category)
    {
        $category->create($request->validated());

        return redirect()
            ->route('category.index')
            ->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('Admin.Category.edit')
            ->with([
                'category' => $category
            ]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()
            ->route('category.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()
            ->route('category.index')
            ->with('success', 'Category deleted successfully');
    }
}
