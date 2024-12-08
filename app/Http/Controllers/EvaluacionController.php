<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Models\Competencia;
use App\Models\Criterio;
use App\Models\Rubrica;
use App\Models\Atributo;
use App\Models\AtributoEvaluacion;

use App\Http\Requests\StoreEvaluacionRequest;
use App\Http\Requests\UpdateEvaluacionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function obtenerPorCompetencia($id)
    {
        return Evaluacion::where("competencia_id", "=", $id)
        ->orderBy("puntuacion_final", "desc")->get();
    }

    public function guardarCalificacion(Request $request, $evaluacion_id,$atributo_id)
    {
        DB::transaction(function () use ($request, $evaluacion_id, $atributo_id) {

            AtributoEvaluacion::where("evaluacion_id", "=", $evaluacion_id)
            ->where("atributo_id", "=", $atributo_id)
            ->update(["calificacion" => $request->calificacion]);

            $sumaCalificaciones = AtributoEvaluacion::where("evaluacion_id", "=", $evaluacion_id)
            ->sum("calificacion");

            Evaluacion::where("id", "=", $evaluacion_id)
                ->update(["puntuacion_final" => $sumaCalificaciones]);

        }); 

        return  AtributoEvaluacion::where("evaluacion_id", "=", $evaluacion_id)
        ->where("atributo_id", "=", $atributo_id)->with("evaluacion")->first();    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion();
        DB::transaction(function() use ($request, $evaluacion) {
     
            $evaluacion->nombre = $request->nombre;
            $evaluacion->auto = "";
            $evaluacion->club = $request->club;
            $evaluacion->competencia_id = $request->competencia_id;
            $evaluacion->marca = $request->marca;
            $evaluacion->anio = $request->anio;
            $evaluacion->puntuacion_final = 0;
            $evaluacion->user_id =1;
            $evaluacion->save();

        
            $competencia  = Competencia::find($request->competencia_id);
            $criterios = Criterio::where('rubrica_id', $competencia->rubrica_id)->get();
            $criterioIds = $criterios->pluck('id');
            $atributos = Atributo::whereIn('criterio_id', $criterioIds)->get();
            $atributoIds = $atributos->pluck('id');
            $evaluacion->atributos()->attach($atributoIds, ['calificacion' => null]);
           
        });

        return Evaluacion::with("atributos")->with(["competencia"=>function($q){
            $q->with(["rubrica"=>function($q){
                $q->with("criterios");
            }]);
        }])->find($evaluacion->id);
     
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Evaluacion::with(["atributos"=>function($q){
            $q->leftJoin("criterios", "criterio_id","=", "criterios.id")
            ->with("criterio")
            ->orderBy("criterios.nombre", "asc")
            ->orderBy("atributos.nombre","asc");
        }])->with(["competencia"=>function($q){
            $q->with(["rubrica"=>function($q){
                $q->with("criterios");
            }]);
        }])->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluacionRequest $request, Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->atributos()->detach();
        $evaluacion->delete();
    }
}
