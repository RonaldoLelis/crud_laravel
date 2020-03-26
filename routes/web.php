<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', 'BookController@index');
Route::resource('/books', 'BookController');
