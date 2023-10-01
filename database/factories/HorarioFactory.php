<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hora_inicial' => $this->faker->dateTime('now'),
            'hora_final' => $this->faker->dateTime('now'),
            'estado' => $this->faker->randomElement(['1', '0'])
        ];
    }
}
