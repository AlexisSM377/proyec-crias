<?php

namespace Database\Factories;

use App\Models\Barnyard;
use App\Models\Corral;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corral>
 */
class CorralFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Corral::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->bothify('Corral ##??'),
            'corral_tipos_id' => fake()->numberBetween($min = 1, $max = 2)
        ];
    }
}
