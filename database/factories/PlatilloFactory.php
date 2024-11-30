<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Platillo>
 */
class PlatilloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'disponible' => $this->faker->boolean(),
            'categoria' => $this->faker->word(),
            'imagen' => $this->faker->imageUrl(),
            'ingredientes' => $this->faker->words(3, true),
            'precio' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
