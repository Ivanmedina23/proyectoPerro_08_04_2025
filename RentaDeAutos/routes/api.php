<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AutosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RentaController;

Route::resource("auto", AutosController::class);

Route::resource("Renta", RentaController::class);

Route::resource("usuario", UsuarioController::class);

Route::post('/login',[LoginController::class,'authenticate'])->name('Login');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

