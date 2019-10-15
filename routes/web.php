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
	
	Route::get('kesjas', function() {
		return view('members.index');
	});

	Route::get('inputtkj', function() {
		return view('operator.ipttkj');
	});
	Route::get('inputbela', function() {
		return view('operator.iptbela');
	});
	Route::get('prestasii', function() {
		return view('operator.prestasi');
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
	Route::get('prestasi', function() {
		return view('members.prestasi');
	});
	Route::get('rangkuman', function() {
		return view('members.rangkuman');
	});
});

