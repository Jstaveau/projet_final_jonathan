<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence($nbWords = 6),
            'content'=> $this->faker->paragraph(),
            'user_id'=> $this->faker->numberBetween($min = 1, $max = 5),
            'article_category_id'=> $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
