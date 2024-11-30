<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo; // Importamos el modelo

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear platillos con datos aleatorios usando la Factory
        Platillo::factory()->count(50)->create(); 
    }
}
