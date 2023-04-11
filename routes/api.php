<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//route for login 
Route::post('/login',  '\App\Http\Controllers\Auth\LoginController@login'); 

Route::middleware('auth:api')->group(function () {

    Route::prefix('worker')->group(function () {
        Route::get('/{id}', 'workerController@show')->name('worker.show');
        Route::post('/create', 'workerController@store')->name('worker.store');
    });

    Route::prefix('inspection')->group(function () {
        Route::post('/create', 'InspectionController@store')->name('inspection.store');
        Route::get('/{id}', 'InspectionController@show')->name('inspection.show');
    });    

    Route::prefix('vehicle')->group(function () {
        Route::post('/create', 'VechicleController@store')->name('vehicle.store');
        Route::get('/{id}', 'VechicleController@show')->name('vehicle.show');
        Route::patch('/{id}', 'VechicleController@update')->name('vehicle.update');
    });    


});

