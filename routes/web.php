<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\Controllers\AuthController@login');


Route::get('/home', 'Home\Controllers\HomeController@index');


Route::get('/medical-reimbursement', 'MedicalReimbursement\Controllers\MedicalReimbursementController@index');
