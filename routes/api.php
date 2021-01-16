<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace' => 'Api'], function () { 
   
    Route::post('/login', [LoginController::class,'login']);
    Route::get('/area', [LocationController::class,'areas']);
    Route::get('/city/{area_id}', [LocationController::class,'cities']);
    Route::post('/register', [LoginController::class,'register']);
});