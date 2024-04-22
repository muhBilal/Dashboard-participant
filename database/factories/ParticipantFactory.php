<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'nik' => $this->faker->unique()->randomNumber(),
            'phone' => $this->faker->phoneNumber,
            'place_of_birth' => $this->faker->city,
            'date_of_birth' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'status' => $this->faker->randomElement(['verified', 'not verified']),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
        ];
    }
}
