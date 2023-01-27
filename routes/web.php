<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LoginpagController;
use App\Http\Controllers\confirmReservaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layeguada');
})->name("/");


Route::get('/loginpag', function () {
    return view('loginpag');
})->name("loginpag");

Route::get('/reserva', function () {
    return view('reserva');
})->name("reserva");


Route::get('/reserva2', function () {
    return view('reserva2');
})->name("reserva2");



Route::get('audiovisual', function () {
    return view('audiovisual');
})->name("audiovisual");

Route::get('/confirmReserva', function () {
    return view('confirmReserva');
})->name("confirmReserva");

Route::get('/AvisoLegal', function () {
    return view('AvisoLegal');
})->name("AvisoLegal");

Route::get('/PoliticaCook', function () {
    return view('PoliticaCook');
})->name("PoliticaCook");

Route::get('/PoliticaPriv', function () {
    return view('PoliticaPriv');
})->name("PoliticaPriv");

Route::get('/registro', function () {
    return view('registro');
})->name("registro");

Route::get('/contacto', function () {
    return view('contacto');
})->name("contacto");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store']);

Route::get('/reserva', [ReservaController::class, 'index'])->name('reserva');
Route::post('/reserva', [ReservaController::class, 'store']);

Route::get('/loginpag', [LoginpagController::class, 'index'])->name('loginpag');
Route::post('/loginpag', [LoginpagController::class, 'store']);



Route::get('/confirmReserva', [ReservaController::class, 'showAll'])->name('confirmReserva');
Route::post('/confirmReserva', [ReservaController::class, 'cancelReserva']);

Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);



