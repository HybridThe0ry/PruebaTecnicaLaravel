<?php

namespace Database\Seeders;

use App\Models\MontosMaximos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MontosMaximosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MontosMaximos::factory()->count(5)->create();
    }
}
