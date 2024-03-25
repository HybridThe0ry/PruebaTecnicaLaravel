<?php

namespace Database\Factories;

use App\Models\Beneficio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BeneficiosEntregados>
 */
class BeneficiosEntregadosFactory extends Factory
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
            'run' => $this->faker->randomNumber(),
            'dv' => $this->faker->randomNumber(),
            'total' => $this->faker->randomNumber(),
            'estado' => $this->faker->randomNumber(),
            'fecha' => $this->faker->date(),
        ];
    }
}
