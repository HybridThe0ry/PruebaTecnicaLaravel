<?php

use App\Http\Controllers\MontosMaximosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\BeneficioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/ficha', [FichaController::class, 'store']);
Route::post('/beneficio', [BeneficioController::class, 'store']);
Route::post('/montos-maximos', [MontosMaximosController::class, 'store']);
Route::get('/misbeneficios/{rut}', [BeneficioController::class, 'consultarBeneficiosPorRut']);
/*
Route::post('/beneficios', [BeneficioController::class, 'store']);
Route::post('/fichas', [FichaController::class, 'store']);
Route::post('/montos-maximos', [MontosMaximosController::class, 'store']);*/