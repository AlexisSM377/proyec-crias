<?php

namespace Database\Seeders;

use App\Models\ClasificacionCarne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClasificacionCarneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClasificacionCarne::create([
            'type' => 1,
            'name' => 'Grasa Tipo 1'
        ]);

        ClasificacionCarne::create([
            'type' => 2,
            'name' => 'Grasa Tipo 2'
        ]);
    }
    
}
