<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ficha;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beneficio>
 */
class BeneficioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'ficha_id' => Ficha::factory(),
            'fecha' => $this->faker->date(),
        ];
    }
}
