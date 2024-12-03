<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use App\Http\Requests\StoreCriterioRequest;
use App\Http\Requests\UpdateCriterioRequest;
use Illuminate\Http\Request;

class CriterioController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function obtenerPorRubrica($id)
    {
        return Criterio::where("rubrica_id","=", $id)->get();

    }

    public function index()
    {
        //
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
        //
        $criterio= new Criterio();
        $criterio->nombre = $request->nombre;
        $criterio->rubrica_id = $request->rubrica_id;
        $criterio->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Criterio $criterio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criterio $criterio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $criterio = Criterio::findOrFail($id);
        $criterio->nombre =$request->nombre;
        $criterio->save();
        return $criterio;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $criterio = Criterio::findOrFail($id);
        $criterio->delete();
    }
}
