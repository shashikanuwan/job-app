<?php

namespace Database\Seeders;

use App\Models\EmploymentType;
use Illuminate\Database\Seeder;

class EmploymentTypeSeeder extends Seeder
{
    public function run()
    {
        $EmploymentType = [
            ['name' => 'permanent'],
            ['name' => 'temporary'],
            ['name' => 'part time'],
            ['name' => 'full time'],
            ['name' => 'intern'],
            ['name' => 'contractor'],
            ['name' => 'freelance'],
            ['name' => 'volunteer'],
            ['name' => 'other'],
        ];

        collect($EmploymentType)
            ->each(function ($category) {
                $newEmploymentType = new EmploymentType();
                $newEmploymentType->name = $category['name'];
                $newEmploymentType->save();
            });
    }
}
