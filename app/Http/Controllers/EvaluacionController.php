<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use App\Http\Requests\StoreEvaluacionRequest;
use App\Http\Requests\UpdateEvaluacionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Evaluacion::all();
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
        
        DB::transaction(function() use ($request) {
            $evaluacion = new Evaluacion();
            $evaluacion->nombre = $request->nombre;
            $evaluacion->auto = "";
            $evaluacion->club = $request->club;
            $evaluacion->competencia_id = $request->competencia_id;
            $evaluacion->marca = $request->marca;
            $evaluacion->anio = $request->anio;
            $evaluacion->puntuacion_final = $request->puntuacion_final;
            $evaluacion->save();
        
            // Asignamos las calificaciones
            $calificaciones = $request->calificaciones;
            foreach ($calificaciones as $calificacion) {
                $evaluacion->atributos()->attach(
                    $calificacion["atributo_id"], 
                    [
                        "calificacion" => $calificacion["calificacion"],
                        "created_at" => now(),
                        "updated_at" => now()  
                    ]
                );
            }
        });
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluacion $evaluacion)
    {
        //
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
    public function destroy(Evaluacion $evaluacion)
    {
        //
    }
}
