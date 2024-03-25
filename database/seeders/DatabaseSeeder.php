<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FichaSeeder::class);
        $this->call(BeneficioSeeder::class);
        $this->call(BeneficiosEntregadosSeeder::class);
        $this->call(MontosMaximosSeeder::class);
    }
}
