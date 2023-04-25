<?php

namespace Database\Seeders;

use App\Models\Proceso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcesosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proceso::create([
            'name' => 'Cuarentena'
        ]);
        Proceso::create([
            'name' => 'Saludable'
        ]);
        Proceso::create([
            'name' => 'Sacrificado'
        ]);
        Proceso::create([
            'name' => 'Engordamiento'
        ]);
        Proceso::create([
            'name' => 'Venta'
        ]);
    }
}
