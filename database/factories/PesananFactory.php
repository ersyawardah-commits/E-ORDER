<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use App\Models\Kasir;
use Illuminate\Database\Eloquent\Factories\Factory;

class PesananFactory extends Factory
{
    public function definition(): array
    {
        return [
            'pelanggan_id' => Pelanggan::inRandomOrder()->first()->id,
            'kasir_id' => Kasir::inRandomOrder()->first()->id,
            'tanggal_pesanan' => fake()->dateTime(),
            'total_harga' => fake()->numberBetween(10000, 100000),
            'status' => fake()->randomElement([
                'Diproses',
                'Selesai'
            ]),
        ];
    }
}