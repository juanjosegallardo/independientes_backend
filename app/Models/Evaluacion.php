<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $table= "evaluaciones";
    
    public function competencia()
    {
        return $this->belongsTo("App\Models\Competencia");
    }
    public function Atributos()
    {
        return $this->belongsToMany("App\Models\Atributo", "atributo_evaluacion")->withPivot("calificacion");
    }
    public function Evaluador()
    {
        return $this->belongsTo("App\Models\User", "user_id")->withTrashed();
    }

    
    

}
