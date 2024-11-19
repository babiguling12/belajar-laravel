<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $namePost = fake()->sentence();

        return [
            'slug' => Str::slug($namePost),
            'title' => $namePost,
            'author_id' => User::factory(),
            'kategori_id' => Kategori::factory(),
            'body' => fake()->text()
        ];
    }
}
