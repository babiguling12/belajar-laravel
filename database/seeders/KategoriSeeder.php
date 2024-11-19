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
        ]);

        Kategori::create([
            'name' => 'Pemrograman Berorientasi Objek',
            'slug' => 'pemrograman-berorientasi-objek',
        ]);

        Kategori::create([
            'name' => 'Analaisa PL',
            'slug' => 'analisa-pl',
        ]);

        Kategori::create([
            'name' => 'Statistika Susah',
            'slug' => 'statistika-susah',
        ]);

        Kategori::create([
            'name' => 'Basis Data',
            'slug' => 'basis-data',
        ]);
    }
}
