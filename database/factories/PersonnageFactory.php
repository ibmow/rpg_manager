<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnage>
 */
class PersonnageFactory extends Factory
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
            'specialite' => $this ->faker->sentence(rand(1, 3), true),
            'magie' => $this ->faker->sentence(rand(1, 3), true),
            'force' => $this ->faker->sentence(rand(1, 3), true),
            'agilite' => $this ->faker->sentence(rand(1, 3), true),
            'intelligence' => $this ->faker->sentence(rand(1, 3), true),
            'point_de_vie' => $this ->faker->sentence(rand(1, 3), true)


        ];
    }
}
