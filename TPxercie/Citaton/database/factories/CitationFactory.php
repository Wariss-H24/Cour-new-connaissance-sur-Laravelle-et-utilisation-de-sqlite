<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'texte' => fake()->sentence(12),
            'auteur' => fake()->sentence(2),
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
