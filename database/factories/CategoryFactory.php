<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = [
            'Technology',
            'Health & Wellness',
            'Travel',
            'Food & Recipes',
            'Personal Finance',
            'Lifestyle',
            'Business & Entrepreneurship',
            'Education & Learning',
            'Fashion & Beauty',
            'Home Improvement'
        ];

        $category = fake()->unique()->randomElement($categories);

        return [
           'name' => $category,
           'slug' => str($category)->slug(),
        ];
    }
}
