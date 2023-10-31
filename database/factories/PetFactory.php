<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'height' => fake()->numberBetween(40,100),
            'type' => Arr::random(['caniche','salchicha','pastor_aleman','bulldog'],1)[0],
            'color' => Arr::random(['blanco','negro','beige','cafe'],1)[0],
        ];
    }
}
