<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    public function run()
    {
        $subCategory = [
            ['name' => 'software developer', 'category_id' => 1],
            ['name' => 'web developer', 'category_id' => 1],

            ['name' => 'Project Management Specialist', 'category_id' => 2],
            ['name' => 'Agriculture Supervisor', 'category_id' => 2],
        ];

        collect($subCategory)
            ->each(function ($subCategory) {
                $newSubCategory = new SubCategory();
                $newSubCategory->name = $subCategory['name'];
                $newSubCategory->category_id = $subCategory['category_id'];
                $newSubCategory->save();
            });
    }
}
