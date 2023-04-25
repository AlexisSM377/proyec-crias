<?php

use App\Http\Livewire\Hola;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['role:personal-control|reclutador|veterinario|super-admin'])->get('/crias', App\Http\Livewire\Cria\Index::class)->name('crias.index');
    Route::middleware(['role:personal-control|reclutador|veterinario|super-admin'])->get('/crias/crear', \App\Http\Livewire\Cria\Crear::class)->name('crias.crear');

    Route::middleware(['role:ayudante-veterinario|super-admin'])->get('/sensores', \App\Http\Livewire\Sensor\Index::class)->name('sensor.index');
    Route::middleware(['role:ayudante-veterinario|super-admin'])->get('/sensores/crear',\App\Http\Livewire\Sensor\Crear::class)->name('sensor.crear');

    Route::middleware(['role:personal-control|reclutador|veterinario|super-admin'])->get('/dieta', \App\Http\Livewire\Dieta\Index::class)->name('dieta.index');
    Route::middleware(['role:personal-control|reclutador|veterinario|super-admin'])->get('/dieta/crear/{slug}',\App\Http\Livewire\Dieta\Crear::class)->name('dieta.crear');
});






