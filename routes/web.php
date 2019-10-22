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
    return view('welcome');
});

Route::get('login', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('user', 'UserController')->except(['show']);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::prefix('child')->group(function() {
		Route::get('', 'ChildController@index')->name('child.index');
		Route::get('{id}', 'ChildController@show')->name('child.show');
		Route::get('{id}/create', 'ChildController@create')->name('child.create');
		Route::post('{id}', 'ChildController@store')->name('child.store');
		Route::get('{id}/edit', 'ChildController@edit')->name('child.edit');
	});
	
	// Route::prefix('kesjas')->group(function() {
	// 	Route::get('', 'KesjasController@index')->name('kesjas.index');
	// 	Route::get('{id}', 'KesjasController@show')->name('kesjas.show');
	// 	Route::get('{id}/create', 'KesjasController@create')->name('kesjas.create');
	// 	Route::post('{id}', 'KesjasController@store')->name('kesjas.store');
	// 	Route::get('{id}/edit', 'KesjasController@edit')->name('kesjas.edit');
	// });

	Route::resource('child', 'ChildController');
	Route::resource('tkj','TkjController');
	Route::resource('bdp','BdpController');
	Route::resource('prestasi','PrestasiController');
	Route::resource('olahraga','OlahragaController');
	Route::resource('lain','LainController'); 
	Route::resource('putera','PuteraController');
	
	Route::get('kesjas',function(){
		return view('members.show');
	});
	Route::get('pres',function(){
		return view('members.prestasi');
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

