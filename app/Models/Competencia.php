<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competencia extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function rubrica()
    {
        return $this->belongsTo("App\Models\Rubrica", "rubrica_id");
    }

    public function evaluaciones()
    {
        return $this->hasMany("App\Models\Evaluacion");
    }
}
