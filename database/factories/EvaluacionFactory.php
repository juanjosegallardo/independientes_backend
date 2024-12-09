<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class EvaluacionFactory extends Factory
{
    public function definition()
    {
        // Crea una instancia de Faker con el locale es_MX
        $faker = FakerFactory::create('es_MX');

        $carBrands = [
            'Toyota', 'Ford', 'Chevrolet', 'Honda', 'Nissan',
            'BMW', 'Mercedes-Benz', 'Volkswagen', 'Hyundai',
            'Audi', 'Kia', 'Subaru', 'Mazda', 'Tesla'
        ];

        $carClubs = [
            'Club Mustang México', 'Autos Clásicos Guadalajara', 
            'Vochomanía', 'Speed Demons CDMX', 
            'Drift Monterrey', 'Bimmers Puebla', 
            'Street Racing Querétaro', 'JDM Lovers GDL', 
            'Car Culture Cancún', 'Old School Monterrey'
        ];

        return [
            'nombre' => $faker->firstName . ' ' . $faker->lastName,
            'auto' => $faker->word(),
            'marca' => $faker->randomElement($carBrands),
            'anio' => $faker->year(),
            'club' => $faker->randomElement($carClubs),
            'puntuacion_final' => 0,
            'competencia_id' => $faker->numberBetween(1, 3),
            'user_id' => 1
        ];
    }
}
