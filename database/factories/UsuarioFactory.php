<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
                return [

                        'documento_identidad' => $this->faker->name(),
                        'nombre'  => $this->faker->name(),
                        'apellido'  => $this->faker->firstName(),
                        'email' => $this->faker->unique()->safeEmail(),
                        'telefono' => $this->faker->name(),
                ];
        }
}
