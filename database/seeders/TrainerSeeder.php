<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainerSeeder extends Seeder
{
    public function run()
    {
        for( $i = 0; $i < 10000; $i++ ) {
        Trainer::factory()->count(100)->create();
        }
    }
}
