<?php

namespace Database\Seeders;

use App\Models\BeneficiosEntregados;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeneficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BeneficiosEntregados::factory()->count(5)->create();
    }
}
