<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->randomNumber(8, true),
            'full_name' => $this->faker->name,
            'gender' => $this->faker->randomElement(['Pria', 'Wanita']),
            'position' => $this->faker->randomElement(['Manager','Administrator','Programmer', 'Editor']),
        ];
    }
}
