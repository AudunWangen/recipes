<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecipeIngredient>
 */
class RecipeIngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'recipe_id' => \App\Models\Recipe::inRandomOrder()->first()->id,
            'ingredient_id' => \App\Models\Ingredient::inRandomOrder()->first()->id,
            'measurement_unit' => $this->faker->word(),
            'amount' => $this->faker->randomFloat(2),
        ];
    }
}
