<?php

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
    return redirect()->route('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('user', 'UserController')->except(['show']);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::resource('child', 'ChildController');
	Route::resource('tkj','TkjController');
	Route::resource('bdp','BdpController');
	Route::resource('prestasi','PrestasiController');

	
	Route::get('kesjas', function() {
		return view('members.index');
	});
	Route::get('laporan', function() {
		return view('operator.laporan');
	});
	Route::get('rekom', function() {
		return view('operator.rekom');
	});
	Route::get('beladiri', function() {
		return view('members.beladiri');
	});
	Route::get('rangkuman', function() {
		return view('members.rangkuman');
	});
});

