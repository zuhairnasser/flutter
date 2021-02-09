<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return 'dkcmcd';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('hospital', App\Http\Controllers\HospitalController::class);
Route::resource('cities', App\Http\Controllers\Location\CityController::class);
Route::resource('states', App\Http\Controllers\Location\StateController::class);
