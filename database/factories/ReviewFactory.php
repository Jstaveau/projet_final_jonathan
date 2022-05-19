<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content'=> $this->faker->paragraph(),
            'user_id'=> $this->faker->numberBetween($min = 1, $max = 5),
            'product_id'=> $this->faker->numberBetween($min = 1, $max = 9),
        ];
    }
}
