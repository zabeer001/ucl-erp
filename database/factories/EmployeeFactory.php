<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->name,
            'dob' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),

            'employee_id' => Str::random(10),
            'branch_id' => $this->faker->numberBetween(1, 10),
            'department_id' => $this->faker->numberBetween(1, 10),
            'designation_id' => $this->faker->numberBetween(1, 10),
            'company_doj' => $this->faker->date(),
            'documents' => $this->faker->word,

            'account_holder_name' => $this->faker->name,
            'account_number' => $this->faker->bankAccountNumber,
            'bank_name' => $this->faker->company,
            'bank_identifier_code' => $this->faker->swiftBicNumber,
            'branch_location' => $this->faker->city,
            'tax_payer_id' => $this->faker->randomNumber(9),
            'salary_type' => $this->faker->numberBetween(1, 3),
            'salary' => $this->faker->numberBetween(30000, 100000),
            'is_active' => $this->faker->numberBetween(0, 1),
            'created_by' => $this->faker->numberBetween(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
