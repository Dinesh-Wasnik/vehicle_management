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
Route::post('/login', 'LoginController@login'); 

Route::middleware('auth:api')->prefix('user')->group(function () {

    //route for eligibility check
    Route::post('/eligibility_check', 'CampaginController@eligibilityCheck')->name('eligibility_check'); 

    //route for validate photo submission
    Route::post('/validate_submission', 'CampaginController@validateSubmission')->name('validate_submission');

});

