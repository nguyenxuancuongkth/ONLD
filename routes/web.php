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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ---------------------------------------------------------
Route::get('/', function () {
    return view('login');
});




Route::prefix('user')->group(function () {
	Route::get('/login', 'LoginController@create')->name('user.login');
	Route::get('/logout', 'LoginController@logout')->name('user.logout');
	Route::get('/register', 'RegisterController@create')->name('user.register');
	Route::post('/authenticate', 'LoginController@authenticate')->name('user.authenticate');
	Route::post('/register', 'RegisterController@register')->name('user.post.register');
});


