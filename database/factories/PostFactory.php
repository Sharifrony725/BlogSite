<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $title = fake()->realText(50);

        return [
            'user_id' => User::first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'title' => $title,
            'slug' => str($title)->slug(),
            'body' => fake()->realText(1000),
            'views' => random_int(10,10000)
        ];
    }
}
