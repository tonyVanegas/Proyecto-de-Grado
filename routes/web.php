<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\DisponibilidadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home2Controller;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/panel - administrador', [HomeController::class,'index'])->name('home'); 
Route::get('/panel - director', [Home2Controller::class,'index'])->name('home2');
Route::resource('/ingreso', IngresoController::class);
Route::resource('/usuario', UsuarioController::class);
Route::resource('/solicitud', SolicitudController::class);
Route::resource('/anuncio', AnuncioController::class);
Route::resource('/disponibilidad', DisponibilidadController::class);
