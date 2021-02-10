<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Location\CityController as CityLocation;
use App\Http\Controllers\Location\StateController as StateController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return 'dkcmcd';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
Route::resource('hospital', App\Http\Controllers\HospitalController::class); 
Route::resource('cities', App\Http\Controllers\location\CityController::class);
Route::resource('states', App\Http\Controllers\location\StateController::class);
=======
Route::resource('hospital', App\Http\Controllers\HospitalController::class);
Route::resource('cities', CityLocation::class);
Route::resource('states', StateController::class);
>>>>>>> fa88ca66aa7b7656dc7e71c9b70742c8fd72dbd7
