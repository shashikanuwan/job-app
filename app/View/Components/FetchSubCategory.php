<?php

namespace App\View\Components;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FetchSubCategory extends Component
{
    public Collection $subCategories;

    public function __construct()
    {
        $this->subCategories = SubCategory::query()->with('category')->get();
    }

    public function render()
    {
        return view('components.fetch-sub-category');
    }
}
