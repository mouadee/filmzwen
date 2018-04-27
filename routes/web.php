<?php

use App\Play;
use App\Film;


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

	$plays = Play::get();
	$film = Film::get();

	return view('welcome', compact('plays', 'film'));
});


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('films', 'films@films');
Route::get('series', 'series@index');
Route::get('chPass', 'chPass@index');
Route::get('profile', 'editProfile@index');
Route::get('ar_films', 'arFilms@index');

Route::get('plays', 'player@index')->name('play.index');
Route::get('plays/{id}', 'player@show')->name('play.show');
Route::get('film/{id}', 'filmView@show')->name('film.show');

Route::post('profile', 'editProfile@store');
Route::post('chPass', 'chPass@store');
//Route::resource('comment', 'comment');

Route::post('/user/update/{id}', 'editProfile@update');

