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



Route::get('/activiteiten','pagecontroller@index1');
Route::get('/cursussen','pagecontroller@index2');
Route::get('/vereniging','pagecontroller@index3');
Route::get('/zwerm','pagecontroller@index4');
Route::get('/lid','pagecontroller@index5');
Route::get('/gallery','pagecontroller@index6');
