<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\AutosController;
use App\Http\Controllers\VehiculoController;
Route::get('/', [HomeController::class, 'index'])->name('home.index');//->middleware('auth');

Route::get('/autos', [AutosController::class, 'index'])->name('autos.index');

Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index');

Route::get('/vehiculos/create', [VehiculoController::class, 'create'])->name('vehiculos.create');
Route::post('/vehiculos', [VehiculoController::class, 'store'])->name('vehiculos.store');