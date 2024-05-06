<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InsertionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->sentence(3),
            'description' => fake()->text(100),
            'price'=>fake()->randomNumber(5, true),
            'user_id'=>rand(1,10),
            'category_id'=>rand(1,10),
        ];
    }
}
