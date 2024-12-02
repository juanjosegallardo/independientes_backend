<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias  = [
            ["nombre"=>"Principiante" , "puntaje_minimo"=>0, "puntaje_maximo"=>100, "rubrica_id"=>1],
            ["nombre"=>"Intermedio" , "puntaje_minimo"=>101, "puntaje_maximo"=>200, "rubrica_id"=>1],
            ["nombre"=>"Avanzado" , "puntaje_minimo"=>201, "puntaje_maximo"=>10000, "rubrica_id"=>1],

        ];

        foreach($categorias as $categoria)
        {
            Categoria::create($categoria);
        }
    }
}
