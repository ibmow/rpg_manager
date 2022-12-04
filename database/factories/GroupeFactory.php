<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Groupe>
 */
class GroupeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this ->faker->sentence (rand(1, 3), true),
            'description' => $this ->faker->sentence(10, true),
            'nombre_de_places' => $this ->faker->sentence(rand(1, 20), true),
        ];
    }
}
