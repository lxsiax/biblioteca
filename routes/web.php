<?php

use App\Http\Controllers\EjemplarController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('libros', LibroController::class);
Route::resource('ejemplares', EjemplarController::class);