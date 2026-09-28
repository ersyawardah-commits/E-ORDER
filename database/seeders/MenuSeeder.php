<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'nama_menu' => 'Nasi Goreng',
            'harga' => 15000
        ]);

        Menu::create([
            'nama_menu' => 'Mie Ayam',
            'harga' => 12000
        ]);

        Menu::create([
            'nama_menu' => 'Es Teh',
            'harga' => 5000
        ]);
    }
}