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

// welcome route
Route::get('/', function () {
    return view('welcome');
});

// callendar route
Route::get('/agenda', function () {
    return view('agenda');
});

// news route
Route::get('/nieuws', function () {
    return view('nieuws');
});

// apiary route
Route::get('/bijenstal', function () {
    return view('bijenstal');
});

// contact route
Route::get('/contact', function () {
    return view('contact');
});

// contact from submit
Route::post('/contact', 'ContactController@send');

// shop route
Route::get('/shop', function () {
    return view('shop');
});

// Stertselaar route
Route::get('/stertselaar', function () {
    return view('stertselaar');
});

// album route
Route::get('/galerij', function () {
    return view('galerij');
});

// acitivity route
Route::get('/activiteiten', function () {
    return view('activiteiten');
});

// courses route
Route::get('/cursussen', function () {
    return view('cursussen');
});

// Association route
Route::get('/vereniging', function () {
    return view('vereniging');
});

// swarm route
Route::get('/zwerm', function () {
    return view('zwerm');
});

// member route
Route::get('/lid', function () {
    return view('lid');
});
Route::get('/asettings', 'SettingsController@settings')->middleware('auth');
Route::post('asettings/create','SettingsController@insert');
