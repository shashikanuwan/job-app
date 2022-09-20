<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        collect(range(1, 2))->each(function ($id) {
            User::factory()->create(['email' => "admin_{$id}@example.com", 'verify_account' => 1])->assignRole(Role::ROLE_ADMIN);
        });

        collect(range(1, 4))->each(function ($id) {
            User::factory()->create(['email' => "employer_{$id}@example.com"])->assignRole(Role::ROLE_EMPLOYER);
        });

        collect(range(1, 2))->each(function ($id) {
            User::factory()->create(['email' => "employee_{$id}@example.com"])->assignRole(Role::ROLE_EMPLOYEE);
        });
    }
}
