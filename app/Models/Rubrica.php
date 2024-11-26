<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    use HasFactory;

    public function criterios()
    {
        return $this->hasMany("App\Models\Criterio");
    }

    public function categorias()
    {
        return $this->hasMany("App\Models\Categoria");
    }
}
