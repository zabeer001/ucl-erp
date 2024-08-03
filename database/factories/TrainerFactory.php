<?php

namespace Database\Factories;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerFactory extends Factory
{
    protected $model = Trainer::class;

    public function definition()
    {
        return [
            'branch' => $this->faker->company,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'contact' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'expertise' => $this->faker->text(50),
            'created_by' => 1, // Assuming created by a default admin user
        ];
    }
}
