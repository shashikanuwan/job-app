<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    public function run()
    {
        $province = [
            ['name' => 'Western Province'],
            ['name' => 'Central Province'],
            ['name' => 'Southern Province'],
            ['name' => 'Uva Province'],
            ['name' => 'Sabaragamuwa Province'],
            ['name' => 'North Western Province'],
            ['name' => 'North Central Province'],
            ['name' => 'Nothern Province'],
            ['name' => 'Eastern Province'],
        ];
        collect($province)
            ->each(function ($province) {
                $newProvince = new Province();
                $newProvince->name = $province['name'];
                $newProvince->save();
            });
    }
}
