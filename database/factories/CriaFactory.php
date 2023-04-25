<?php

namespace Database\Factories;

use App\Models\Corral;
use App\Models\Cria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cria>
 */
class CriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cria::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $generalCorrals = Corral::where('corral_tipos_id', 1)->pluck('id');
        return [
            'peso' => fake()->numberBetween($min = 14, $max = 26),
            'color_muscular' => fake()->numberBetween($min = 1, $max = 7),
            'marmoleo' => fake()->numberBetween($min = 1, $max = 5),
            'costo' => fake()->numberBetween($min = 10000, $max = 30000),
            'name' => fake()->text($maxNbChars = 20),
            'descripcion' => fake()->text($maxNbChars = 50),
            'proveedor_id' => fake()->numberBetween($min = 1, $max = 20),
            'clasificacion_carne_id' => fake()->numberBetween($min = 1, $max = 2),
            'corral_id' => $generalCorrals->random(),
            'proceso_id' => 2

        ];
    }
}
