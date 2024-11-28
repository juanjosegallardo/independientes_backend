<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Criterio;

class CriterioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criterios = [
            ["id" =>1, "nombre"=>"Exterior",  "rubrica_id"=>1],
            ["id" =>2, "nombre"=>"Interior",  "rubrica_id"=>1],
            ["id" =>3, "nombre"=>"Audio",  "rubrica_id"=>1],   
            ["id" =>4, "nombre"=>"Motor",  "rubrica_id"=>1],   
            ["id" =>5, "nombre"=>"Suspensión, frenos, rines y llantas",  "rubrica_id"=>1],            
        ];
        foreach($criterios as $criterio)
        {
            Criterio::create($criterio);
        }
    }
}
