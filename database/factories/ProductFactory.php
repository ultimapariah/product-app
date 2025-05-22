<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(), // "=>" defining values, "->" calling objects
            'price' => fake()->randomFloat(2,1,100),
            'sku' => fake()->unique()->word(),
            'stock' => fake()->numberBetween(1,100),
            'is_active' => fake()->boolean(),
        ];
    }
}
