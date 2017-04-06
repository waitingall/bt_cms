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
//     return view('ngocdong/welcome');
// });

// Route::get('/', function () {
//     return view('ngocdong/ngocdong');
// });

// Route::get('/',[
//     'as' => 'ngocdong',
//     'uses' => 'ngocdongController@index'
// ]);
Route::get('/', [
	'as' => 'home',
	'uses' => 'Controller@index'

	]);
Route::get('/', [
    'as' => 'ngocdong',
	'uses' => 'ngocdongController@index'
]);
