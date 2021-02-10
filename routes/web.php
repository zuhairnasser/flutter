<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\location\CityController as CityLocation;
use App\Http\Controllers\location\StateController as StateController;




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('hospitals', App\Http\Controllers\HospitalController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('drugs', App\Http\Controllers\DrugController::class);
Route::resource('Pharmacies', App\Http\Controllers\PharmacyController::class);
Route::resource('cities', CityLocation::class);
Route::resource('states', StateController::class);
