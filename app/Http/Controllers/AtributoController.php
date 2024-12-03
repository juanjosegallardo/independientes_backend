<?php

namespace App\Http\Controllers;

use App\Models\Atributo;
use App\Http\Requests\StoreAtributoRequest;
use App\Http\Requests\UpdateAtributoRequest;
use Illuminate\Http\Request;

class AtributoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Atributo::all();
    }


    public function obtenerPorCriterio($id)
    {
        return Atributo::where("criterio_id", "=", $id)->get();
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
        $atributo=  new Atributo();
        $atributo->nombre = $request->nombre;
        $atributo->minimo = 1;
        $atributo->maximo = 5;
        $atributo->criterio_id = $request->criterio_id;
        $atributo->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Atributo $atributo)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atributo $atributo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $atributo = Atributo::findOrFail($id);
        $atributo->nombre= $request->nombre;
        $atributo->save();
        return $atributo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $atributo =  Atributo::findOrFail($id);
        $atributo->delete();        
    }
}
