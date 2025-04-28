<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'grade_date' => now()->subDays(rand(1, 365 * 2))->format('Y-m-d'),
            'grade'      => fake()->numberBetween(1, 10),

            'user_id'    => rand(1001, 51000),
            'subject_id' => rand(1, 20),
        ];
    }
}
