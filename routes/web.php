<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/login', 'BookController@login');
Route::resource('/books', 'BookController');

