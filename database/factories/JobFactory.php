<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\EmploymentType;
use App\Models\Role;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\WorkLocation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobFactory extends Factory
{
    public function definition()
    {
        $expiry_date = Carbon::parse($this->faker->dateTimeBetween('+1 day', '+2 months'));

        return [
            'title' =>  Str::limit($this->faker->paragraph, 20),
            'description' =>  $this->faker->text,
            'expiry_date' =>  $expiry_date,
            'minimum_salary' =>  $this->faker->numberBetween(35000, 50000),
            'maximum_salary' =>  $this->faker->numberBetween(50000, 100000),
            'sub_category_id' =>  SubCategory::query()->inRandomOrder()->first()->id,
            'employment_type_id' =>  EmploymentType::query()->inRandomOrder()->first()->id,
            'work_location_id' =>  WorkLocation::query()->inRandomOrder()->first()->id,
            'district_id' =>  District::query()->inRandomOrder()->first()->id,
            'user_id' =>  User::role(Role::ROLE_EMPLOYER)->inRandomOrder()->first()->id,
        ];
    }
}
