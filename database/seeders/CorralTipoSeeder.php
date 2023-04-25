<?php

namespace Database\Seeders;

use App\Models\CorralTipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorralTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CorralTipo::create([
            'type' => 1,
            'name' => 'general'
        ]);

        CorralTipo::create([
            'type' => 2,
            'name' => 'cuarentena'
        ]);

        CorralTipo::create([
            'type' => 3,
            'name' => 'engorda'
        ]);
    }
}
