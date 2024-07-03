<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');