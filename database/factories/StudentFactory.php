<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nis' => $this->faker->unique()->nik(),
            'username' => $this->faker->unique()->userName(),
            'password' => bcrypt('12345'),
            'level' => 'student',
            'kelas_id' => mt_rand(1, 6)
        ];
    }
}
