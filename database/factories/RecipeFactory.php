<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'preptime' => $this->faker->time('i'),
            'cooktime' => $this->faker->time('i'),
            'servings' => $this->faker->randomDigit(),
            'directions' => $this->faker->paragraphs(2, true),
        ];
    }
}
