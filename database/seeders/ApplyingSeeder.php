<?php

namespace Database\Seeders;

use App\Models\Applying;
use Illuminate\Database\Seeder;

class ApplyingSeeder extends Seeder
{
    public function run()
    {
        Applying::factory(5)->create();
    }
}
