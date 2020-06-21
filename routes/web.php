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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home','pagecontroller@index');
Route::get('/activiteiten','pagecontroller@index1');
Route::get('/cursussen','pagecontroller@index2');
Route::get('/ver','pagecontroller@index3');
Route::get('/zwerm','pagecontroller@index4');
Route::get('/lid','pagecontroller@index5');
Route::get('/gallery','pagecontroller@index6');