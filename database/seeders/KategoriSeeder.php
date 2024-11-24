<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategori::factory(3)->create();
        Kategori::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'red',
            'icon' => '🤩'
        ]);

        Kategori::create([
            'name' => 'Pemrograman Berorientasi Objek',
            'slug' => 'pemrograman-berorientasi-objek',
            'color' => 'green',
            'icon' => '💀'
        ]);

        Kategori::create([
            'name' => 'Analisa PL',
            'slug' => 'analisa-pl',
            'color' => 'blue',
            'icon' => '🤮'
        ]);

        Kategori::create([
            'name' => 'Statistika Susah',
            'slug' => 'statistika-susah',
            'color' => 'yellow',
            'icon' => '🗿'
        ]);

        Kategori::create([
            'name' => 'Basis Data',
            'slug' => 'basis-data',
            'color' => 'indigo',
            'icon' => '🤯'
        ]);
    }
}
