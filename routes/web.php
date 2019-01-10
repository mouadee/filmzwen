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

    $plays = Play::paginate(6);
    $film = Film::get();

    return view('welcome', compact('plays', 'film'));
});


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('films', 'films@films');
Route::get('series', 'series@index');
Route::get('chPass', 'chPass@index');

//Route::get('profile', 'editProfile@index');


Route::resource('profile', 'editProfile');
Route::get('ar_films', 'arFilms@index');

Route::resource('comments', 'usersComment');
Route::post('/comments/{film}', 'usersComment@store')->name('comments.store');


Route::get('plays', 'player@index')->name('play.index');
Route::get('plays/{id}', 'player@show')->name('play.show');
Route::get('film/{id}', 'filmView@show')->name('film.show');

//Route::post('profile', 'editProfile@store');
Route::post('chPass', 'chPass@store');
//Route::resource('comment', 'comment');

Route::post('/user/update/{id}', 'editProfile@update');

//Login With Socialite Route :
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\googleAuth@redirectToProvider')->name('google.login');
Route::get('login/google/callback', 'Auth\googleAuth@handleProviderCallback');


// Analytics Routes
Route::resource('analytics', 'analyse');

// Errors routes
Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);


Route::resource('messenger', 'messenger');

/*Route::group(['before' => 'auth'], function () {
    return redirect('/');
});*/
