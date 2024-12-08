<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtributoEvaluacion extends Model
{
    protected $table = "atributo_evaluacion";
    use HasFactory;
    

    public function evaluacion()
    {
        return $this->belongsTo("App\Models\Evaluacion");
    }
}
