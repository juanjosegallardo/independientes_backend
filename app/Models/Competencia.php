<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;


    public function rubrica()
    {
        return $this->belongsTo("App\Models\Rubrica", "rubrica_id");
    }
}
