<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProvinceSeeder::class,
            DistrictSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            WorkLocationSeeder::class,
            EmploymentTypeSeeder::class,
            JobSeeder::class,
        ]);
    }
}
