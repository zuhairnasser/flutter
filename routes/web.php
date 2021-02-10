<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\location\CityController as CityLocation; 
use App\Http\Controllers\location\StateController as StateController; 

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('hospital', App\Http\Controllers\HospitalController::class);  
Route::resource('cities', CityLocation::class);  
Route::resource('states', StateController::class); 
