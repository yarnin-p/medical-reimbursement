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

// Authentications
Route::group([
    'middleware' => ['api'],
    'prefix' => 'v1/auth'
], function () {
    Route::post('check-login', 'Auth\Controllers\Implement\AuthController@login');
});

// Rental Routes
Route::group([
    'middleware' => [],
    'prefix' => 'v1/rentals'
], function () {
    Route::get('', 'Rental\Controllers\Implement\RentalController@list');
    Route::get('{id}', 'Rental\Controllers\Implement\RentalController@read');
    Route::post('', 'Rental\Controllers\Implement\RentalController@create');
    Route::post('import', 'Rental\Controllers\Implement\RentalController@import');
    Route::put('{id}', 'Rental\Controllers\Implement\RentalController@update');
    Route::delete('{id}', 'Rental\Controllers\Implement\RentalController@delete');
});
