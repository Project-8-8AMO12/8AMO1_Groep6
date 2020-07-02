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
Route::post('/home', 'ContactController@send');

// album route
<<<<<<< HEAD
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
=======
Route::get('/album', function () {
    return view('album');
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

Route::get('/createpagina', function () {
    return view('createpagina');
});



Route::get('/home', 'CreateAndUpdateController@getPages')->name('getpages');

Route::get('/createpagina', 'CreateAndUpdateController@getCreate');
Route::post('/createpagina', 'CreateAndUpdateController@Create');

Route::get('/editpagina/{id}', 'CreateAndUpdateController@getUpdate')->name('editpage');
Route::post('/{id}/editpagina', 'CreateAndUpdateController@Update');

Route::get('/deletepagina/{id}', 'CreateAndUpdateController@Delete');

Auth::routes(['register' => false]);

>>>>>>> Issue_#1_cms_pages
