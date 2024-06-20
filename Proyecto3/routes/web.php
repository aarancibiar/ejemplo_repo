<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');//->middleware('auth');

Route::get('/autos', function () {
    return view('Autos.index');
})->name('autos.index');
