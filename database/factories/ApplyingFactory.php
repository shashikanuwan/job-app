<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplyingFactory extends Factory
{
    public function definition()
    {
        return [
            'job_id' =>  Job::query()->inRandomOrder()->first()->id,
            'user_id' =>  User::role(Role::ROLE_EMPLOYEE)->inRandomOrder()->first()->id,
        ];
    }
}
