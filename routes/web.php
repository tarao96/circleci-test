<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register', 'App\Http\Controllers\RegisterController@register')->name('register');
