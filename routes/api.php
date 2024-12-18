<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\RubricaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AtributoController;
use App\Http\Controllers\CriterioController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PDFController;


Route::middleware(['auth:api'])->group(function () {


    Route::get('/pdfs/evaluaciones/{id}', [PDFController::class, 'generarPDF']);
    Route::get("/rubricas/{id}/criterios", [CriterioController::class,"obtenerPorRubrica"]);
    Route::get("/rubricas/{id}/categorias", [CategoriaController::class,"obtenerPorRubrica"]);
    Route::get("/criterios/{id}/atributos", [AtributoController::class,"obtenerPorCriterio"]);
    Route::post("/evaluaciones/{evalucacion_id}/atributos/{atributo_id}/", [EvaluacionController::class,"guardarCalificacion"]);
    Route::resource('/competencias',CompetenciaController::class);
    Route::resource('/rubricas',RubricaController::class);
    Route::resource('/criterios',CriterioController::class);
    Route::resource('/atributos',AtributoController::class);
    Route::resource('/evaluaciones',EvaluacionController::class);
    Route::resource('/categorias',CategoriaController::class);
    Route::resource('/usuarios',UserController::class);
    Route::post('/usuarios/{id}/password',[UserController::class, "cambiarPassword"]);
    Route::get('/competencias/{id}/evaluaciones',[CompetenciaController::class,"obtenerEvaluaciones"]);


});

Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
Route::get('me', [App\Http\Controllers\AuthController::class, 'getUser'])->middleware('auth:api');

