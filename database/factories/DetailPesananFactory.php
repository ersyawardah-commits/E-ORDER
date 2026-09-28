<?php

namespace Database\Factories;

use App\Models\Pesanan;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailPesananFactory extends Factory
{
    public function definition(): array
    {
        return [
            'pesanan_id' => Pesanan::inRandomOrder()->first()->id,
            'menu_id' => Menu::inRandomOrder()->first()->id,
            'jumlah' => fake()->numberBetween(1, 5),
            'subtotal' => fake()->numberBetween(10000, 100000),
        ];
    }
}