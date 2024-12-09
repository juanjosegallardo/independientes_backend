<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evaluacion;
use App\Models\Competencia;
use App\Models\Criterio;
use App\Models\Atributo;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Evaluacion::factory()->count(100)->create();

        $evaluaciones = Evaluacion::all();
        foreach($evaluaciones as $evaluacion)
        {

            $competencia  = Competencia::find($evaluacion->competencia_id);
            $criterios = Criterio::where('rubrica_id', $competencia->rubrica_id)->get();
            $criterioIds = $criterios->pluck('id');
            $atributos = Atributo::whereIn('criterio_id', $criterioIds)->get();
            $atributoIds = $atributos->pluck('id');
            $evaluacion->atributos()->attach($atributoIds, ['calificacion' => null]);
        }
        

    }

}
