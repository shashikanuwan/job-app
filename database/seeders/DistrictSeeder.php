<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    public function run()
    {
        $district = [
            ['name' => 'Gampaha', 'province_id' => 1],
            ['name' => 'Colombo', 'province_id' => 1],
            ['name' => 'Kalutara', 'province_id' => 1],

            ['name' => 'Matale', 'province_id' => 2],
            ['name' => 'Kandy', 'province_id' => 2],
            ['name' => 'Nuwara Eliya', 'province_id' => 2],

            ['name' => 'Hambantota', 'province_id' => 3],
            ['name' => 'Matara', 'province_id' => 3],
            ['name' => 'galle', 'province_id' => 3],

            ['name' => 'Badulla', 'province_id' => 4],
            ['name' => 'Monaragala', 'province_id' => 4],

            ['name' => 'Kegalle', 'province_id' => 5],
            ['name' => 'Ratnapura', 'province_id' => 5],

            ['name' => 'Puttalam', 'province_id' => 6],
            ['name' => 'Kurunegala', 'province_id' => 6],

            ['name' => 'Anuradhapura', 'province_id' => 7],
            ['name' => 'Polonnaruwa', 'province_id' => 7],

            ['name' => 'Jaffna', 'province_id' => 8],
            ['name' => 'Kilinochchi', 'province_id' => 8],
            ['name' => 'Mannar', 'province_id' => 8],
            ['name' => 'Mullaitivu', 'province_id' => 8],
            ['name' =>  'Vavuniya', 'province_id' => 8],

            ['name' => 'Trincomalee', 'province_id' => 9],
            ['name' => 'Batticaloa', 'province_id' => 9],
            ['name' =>  'Ampara', 'province_id' => 9],
        ];
        collect($district)
            ->each(function ($district) {
                $newDistrict = new District();
                $newDistrict->name = $district['name'];
                $newDistrict->province_id = $district['province_id'];
                $newDistrict->save();
            });
    }
}
