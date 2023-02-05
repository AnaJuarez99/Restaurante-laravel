<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\misreservasController;

/*
|----------------------------\----------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);

Route::post('/misreservas', [misreservasController::class, 'addReserva'])->middleware('auth:sanctum');
Route::get('/misreservas', [misreservasController::class, 'misReservas'])->middleware('auth:sanctum');
Route::delete('/misreservas', [misreservasController::class, 'deleteReserva'])->middleware('auth:sanctum');

Route::get('/horarios', [misreservasController::class, 'gethorarios']);
Route::post('/horas', [misreservasController::class, 'gethoras']);