<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'second_name' => $this->faker->name(),
            'first_lastname' => $this->faker->lastName(),
            'second_lastname' => $this->faker->lastName(),
            'married_name' => $this->faker->lastName(),
            'date_of_birth' => $this->faker->date(),
            'dpi' => $this->faker->numerify('#############'),
            'profession' => $this->faker->jobTitle(),
            'photo' => $this->faker->imageUrl(),
            'years_working' => $this->faker->numerify('#'),
            'salary' => $this->faker->numerify('######'),
            'email' => $this->faker->email(),
            'email_verified_at' => $this->faker->date(),
            'password' => Hash::make('12345678'),
            'status_id' => $this->faker->numberBetween(1,3),
            'role_id' => $this->faker->numberBetween(1,3),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
