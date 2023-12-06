<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);
Route::get('/search', [StudentController::class, 'search'])->name('search');
Route::resource('/students', StudentController::class);
