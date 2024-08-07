<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 branches
        Branch::factory()->count(10)->create();
    }
}
