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
// Pagecontroller aanmaken
Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/agenda', 'PagesController@agenda');
Route::get('/nieuws', 'PagesController@nieuws');
Route::get('/bijenstal', 'PagesController@bijenstal');
Route::get('/contact', 'PagesController@contact');
Route::get('/shop', 'PagesController@shop');
Route::get('/stertselaar', 'PagesController@shop');
Route::get('/galerij', 'PagesController@galerij');
Route::get('/activiteiten', 'PagesController@activiteiten');
Route::get('/cursussen', 'PagesController@shop');
Route::get('/vereniging', 'PagesController@vereniging');
Route::get('/zwerm', 'PagesController@zwerm');
Route::get('/lid', 'PagesController@lid');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');


// contact from submit
Route::post('/contact', 'ContactController@send');

 issue_#21_subpages
 Stertselaar route


// album route
Auth::routes(['register' => false]);

// current account settings
Route::get('/asettings', 'SettingsController@settings')->middleware('auth');
Route::post('asettings/create','SettingsController@insert');

// user settings routes
Route::get('/usettings', 'SettingsController@usettings')->middleware('auth');
Route::post('/usettings/create','SettingsController@uinsert');
Route::get('/usettings/deleteuser/{id}','SettingsController@deleteuser');
Route::get('/usettings/edituser/{id}', 'SettingsController@edituser')->middleware('auth');
Route::post('/usettings/edituserpost/{id}', 'SettingsController@edituserpost')->middleware('auth');
Route::get('/usettings/adduser', 'SettingsController@adduser')->middleware('auth');
Route::post('asettings/adduserpost','SettingsController@adduserpost');

// messages routing
Route::get('messages', 'MessageController@messages')->middleware('auth');
Route::get('/messages/message/{id}', 'MessageController@viewindividual')->middleware('auth');
Route::get('/messages/delete/{id}','MessageController@delete');

// laravel auth route
Auth::routes();
 Development

// welcome route after user is authenticated.

 issue_#21_subpages

Route::get('/ver','pagecontroller@index3');





Development
