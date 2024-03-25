<?php

namespace Database\Factories;

use App\Models\Beneficio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MontosMaximos>
 */
class MontosMaximosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beneficio_id' => Beneficio::factory(),
            'monto_minimo' => $this->faker->randomNumber(),
            'monto_maximo' => $this->faker->randomNumber(),
        ];
    }
}
