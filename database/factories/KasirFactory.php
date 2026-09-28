<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KasirFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'no_hp' => fake()->phoneNumber(),
        ];
    }
}