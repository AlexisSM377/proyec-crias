<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super-admin', 'guard_name' => 'web']);
        Role::create(['name' => 'personal-control', 'guard_name' => 'web']);
        Role::create(['name' => 'reclutador', 'guard_name' => 'web']);
        Role::create(['name' => 'veterinario', 'guard_name' => 'web']);
        Role::create(['name' => 'ayudante-veterinario', 'guard_name' => 'web']);
    }
}
