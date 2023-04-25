<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['email' => 'admin@crias.com'])->assignRole('super-admin');
        User::factory()->create(['email' => 'persona.control@crias.com'])->assignRole('personal-control');
        User::factory()->create(['email' => 'reclutador@crias.com'])->assignRole('reclutador');
        User::factory()->create(['email' => 'veterinario@crias.com'])->assignRole('veterinario');
        User::factory()->create(['email' => 'ayudante.veterinario@crias.com'])->assignRole('ayudante-veterinario');
    }
}
