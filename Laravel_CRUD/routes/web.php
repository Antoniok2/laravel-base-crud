<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home') -> name('home');
Route::get('/detail/{id}', 'HomeController@show') -> name('detail');
