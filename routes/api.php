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

Route::middleware('auth:api')->prefix('worker')->group(function () {

    Route::post('/create', 'workerController@store')->name('worker.store');
    Route::get('/{id}', 'workerController@show')->name('worker.show');

});

