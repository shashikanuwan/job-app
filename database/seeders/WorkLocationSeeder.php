<?php

namespace Database\Seeders;

use App\Models\WorkLocation;
use Illuminate\Database\Seeder;

class WorkLocationSeeder extends Seeder
{
    public function run()
    {
        $workLocation = [
            ['name' => 'Work from office'],
            ['name' => 'Work from home'],
            ['name' => 'Work from anywhere'],
        ];

        collect($workLocation)
            ->each(function ($category) {
                $newWorkLocation = new WorkLocation();
                $newWorkLocation->name = $category['name'];
                $newWorkLocation->save();
            });
    }
}
