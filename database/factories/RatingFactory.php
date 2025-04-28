<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'rating' => fake()->numberBetween(1, 10),

            'teacher_id' => rand(1, 1000),
            'student_id' => rand(1001, 51000),
        ];
    }
}
