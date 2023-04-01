<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'nip' => $this->faker->unique()->nik(),
            'nik' => $this->faker->unique()->nik(),
            'username' => $this->faker->unique()->userName(),
            'password' => bcrypt('12345'),
            'level' => 'teacher',
        ];
    }
}
