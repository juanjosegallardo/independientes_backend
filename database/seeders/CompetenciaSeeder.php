<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competencia;

class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $competencias = [
            ["nombre"=>"Competencias de Pruebas 1", "fecha"=>"2025-01-05", "categoria"=>"euro", "rubrica_id"=>1],
            ["nombre"=>"Competencias de Pruebas 1", "fecha"=>"2025-01-05", "categoria"=>"tunning", "rubrica_id"=>1],
            ["nombre"=>"Competencias de Pruebas 1", "fecha"=>"2025-01-05", "categoria"=>"bochos", "rubrica_id"=>1],
        ];

        foreach($competencias as $competencia)
        {
            Competencia::create($competencia);            
        }


    }
}
