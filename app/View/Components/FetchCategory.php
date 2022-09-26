<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FetchCategory extends Component
{
    public Collection $categories;

    public function __construct()
    {
        $this->categories = Category::query()->get();
    }

    public function render()
    {
        return view('components.fetch-category');
    }
}
