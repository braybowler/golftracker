<?php

namespace Database\Factories;

use App\Models\Bag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BagFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'nickname' => fake()->word,
            'make' => fake()->word,
            'model' => fake()->word,
        ];
    }
}
