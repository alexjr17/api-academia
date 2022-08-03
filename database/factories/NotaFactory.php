<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Estudainte;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'calificacion' => $this->faker->randomNumber($nbDigits = 1, $strict = false),
            'curso_id' => Curso::all()->random()->id,
            'estudainte_id' => Estudainte::all()->random()->id,
        ];
    }
}
