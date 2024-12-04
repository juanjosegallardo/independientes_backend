<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluacion>
 */
class EvaluacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $carBrands = [
            'Toyota', 'Ford', 'Chevrolet', 'Honda', 'Nissan',
            'BMW', 'Mercedes-Benz', 'Volkswagen', 'Hyundai',
            'Audi', 'Kia', 'Subaru', 'Mazda', 'Tesla'
        ];

        return [
            'nombre' => $this->faker->name(),
            'auto' => $this->faker->word(),
            'marca' => $this->faker->randomElement($carBrands),
            'anio' => $this->faker->year(),
            'club' => $this->faker->word(),
            'puntuacion_final' => $this->faker->numberBetween(0, 400),
            'competencia_id' => $this->faker->numberBetween(1, 3), 
            'user_id' => 1
        ];
    }
}
