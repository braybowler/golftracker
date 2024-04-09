<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{
    public function definition(): array
    {
        return [
            'bag_id' => User::factory(),
            'type' => Club::TYPE_OPTIONS[rand(0, (count(Club::TYPE_OPTIONS) - 1))],
            'make' => fake()->word,
            'model' => fake()->word,
            'average_carry' => fake()->numberBetween(1, 400),
            'average_total' => fake()->numberBetween(1, 400),
        ];
    }
}
