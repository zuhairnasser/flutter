<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Location\CityController as CityLocation;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return 'dkcmcd';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('hospital', App\Http\Controllers\HospitalController::class);
Route::resource('cities', CityLocation::class);
Route::resource('states', App\Http\Controllers\location\StateController::class);

