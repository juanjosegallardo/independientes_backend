<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use App\Http\Requests\StoreCompetenciaRequest;
use App\Http\Requests\UpdateCompetenciaRequest;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Competencia::all();
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
        $competencia=new Competencia();
        $competencia->nombre = $request->nombre;
        $competencia->categoria = $request->categoria;
        $competencia->fecha = $request->fecha;
        $competencia->rubrica_id= $request->rubrica_id;
        $competencia->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Competencia $competencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competencia $competencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetenciaRequest $request, Competencia $competencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $competencia = Competencia::findOrFail($id);
        $competencia->delete();
        
    }
}