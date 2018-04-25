<?php 

Route::group(['prefix' => 'admin', 'namespace'=>'admin'], function() {

	Config::set('auth.defines', 'admin');

	Route::get('login', 'adminLogin@index');
	Route::post('login', 'adminLogin@checkLogin');
	Route::any('logout', 'adminLogin@destroy');

	// check admin authentication
	Route::group(['middleware' => 'admin:admin'], function() {

	Route::resource('users', 'manageUsers');
	Route::resource('add', 'addContent');
	Route::resource('addFilms', 'addFilms');
	Route::resource('edit', 'editContent');
	Route::resource('admin', 'ADminController');
		Route::get('/', function() {
		    return view('admin/home');
		});

Route::get('lang/{lang}', function ($lang) {
				session()->has('lang')?session()->forget('lang'):'';
				$lang == 'ar'?session()->put('lang', 'ar'):session()->put('lang', 'en');
				return back();
			});


	});

});

 ?>