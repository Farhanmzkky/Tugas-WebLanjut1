<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Book2Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'index']);

Route::resource('books', Book2Controller::class);
