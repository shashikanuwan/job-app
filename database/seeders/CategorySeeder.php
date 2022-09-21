<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $category = [
            ['name' => 'ICT'],
            ['name' => 'Agriculture'],
        ];

        collect($category)
            ->each(function ($category) {
                $newCategory = new Category();
                $newCategory->name = $category['name'];
                $newCategory->save();
            });
    }
}
