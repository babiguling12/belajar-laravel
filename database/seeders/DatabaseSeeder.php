<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'King Gustos',
        //     'username' => 'kinggustos',
        //     'email' => 'kinggustos@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        // Kategori::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming',
        // ]);

        // Post::create([
        //     'slug' => 'judul-pertama',
        //     'title' => 'Judul Pertama',
        //     'author_id' => 1,
        //     'kategori_id' => 1,
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, temporibus, 
        //     nisi vero laboriosam modi libero repudiandae reiciendis 
        //     enim deserunt eligendi facilis eveniet distinctio quam! Est alias aliquid 
        //     doloribus explicabo reiciendis!',
        // ]);
        

        // fungsi nya untuk memanggil class
        $this->call([KategoriSeeder::class, UserSeeder::class]);
        
        Post::factory(100)->recycle([
            Kategori::all(),
            User::all(),
        ])->create();
    }
}
