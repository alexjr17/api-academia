<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'f_incio' => $this->faker->date(),
            'f_fin' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'descripcion' => $this->faker->sentence(),
            'profesor_id' => Profesor::all()->random()->id,
        ];
    }
}
