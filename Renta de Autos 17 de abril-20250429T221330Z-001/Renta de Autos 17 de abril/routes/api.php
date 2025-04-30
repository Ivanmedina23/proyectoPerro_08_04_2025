<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RentasController;
use App\Http\Controllers\Proceso\ProcesosRentasController;

Route::post('/crearRenta', [ProcesosRentasController::class, 'crearRenta']);

Route::resource("autos", AutosController::class);

Route::resource("rentas", RentasController::class);

Route::resource("usuarios", UsuariosController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');