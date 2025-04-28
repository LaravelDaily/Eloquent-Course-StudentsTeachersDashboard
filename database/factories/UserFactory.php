<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'              => fake()->name(),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => static::$password ??= Hash::make('password'),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function teacher(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id'                   => 1,
                'teacher_salary'            => rand(10, 99) * 1000,
                'teacher_address'           => fake()->address(),
                'teacher_emergency_contact' => fake()->phoneNumber(),
                'teacher_personal_phone'    => fake()->phoneNumber(),
                'teacher_is_retired'        => rand(0, 10) < 3,
            ];
        });
    }

    public function student(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id'               => 2,
                'student_campus_number' => rand(10, 99),
                'student_address'       => fake()->address(),
                'student_room_number'   => rand(1, 99),
                'student_parent_phone'  => fake()->phoneNumber(),
                'graduation_year'       => rand(0, 10) < 3 ? rand(2000, 2020) : null,
            ];
        });
    }
}
