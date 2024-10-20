<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\RubricaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AtributoController;
use App\Http\Controllers\CriterioController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\PDFController;

Route::get('/pdfs/evaluaciones/{id}', [PDFController::class, 'generarPDF']);
Route::get("/rubricas/{id}/criterios", [CriterioController::class,"obtenerPorRubrica"]);
Route::get("/rubricas/{id}/categorias", [CategoriaController::class,"obtenerPorRubrica"]);
Route::get("/criterios/{id}/atributos", [AtributoController::class,"obtenerPorCriterio"]);
Route::resource('/competencias',CompetenciaController::class);
Route::resource('/rubricas',RubricaController::class);
Route::resource('/criterios',CriterioController::class);
Route::resource('/atributos',AtributoController::class);
Route::resource('/evaluaciones',EvaluacionController::class);
Route::resource('/categorias',CategoriaController::class);
Route::get('/competencias/{id}/evaluaciones',[CompetenciaController::class,"obtenerEvaluaciones"]);




