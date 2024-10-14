<?php

namespace App\Http\Controllers;

use App\Models\Rubrica;
use Illuminate\Http\Request;

class RubricaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Rubrica::all();
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
        $rubrica = new Rubrica();
        $rubrica->nombre= $request->nombre;
        $rubrica->save();
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Rubrica $rubrica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rubrica $rubrica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRubricaRequest $request, Rubrica $rubrica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rubrica = Rubrica::findOrFail($id);
        $rubrica->delete();
        
    }
}