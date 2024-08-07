<?php

namespace Database\Factories;

use App\Models\Knowledge;
use Illuminate\Database\Eloquent\Factories\Factory;

class KnowledgeFactory extends Factory
{
    protected $model = Knowledge::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
