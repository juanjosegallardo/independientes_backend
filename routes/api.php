<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\RubricaController;

Route::resource('/competencias',CompetenciaController::class);
Route::resource('/rubricas',RubricaController::class);
