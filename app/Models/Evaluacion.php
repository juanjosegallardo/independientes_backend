<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $table= "evaluaciones";
    
    public function Rubrica()
    {
        return $this->hasOne("App\Models\Rubrica");
    }
    public function Atributos()
    {
        return $this->belongsToMany("App\Models\Atributo", "atributo_evaluacion")->withPivot("calificacion");
    }
}
