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
//     return view('votuananh/welcome');
// });

// Route::get('/', function () {
//     return view('votuananh/votuananh');
// });

// Route::get('/',[
//     'as' => 'votuananh',
//     'uses' => 'VotuananhController@index'
// ]);
// Route::get('/', [
// 	'as' => 'home',
// 	'uses' => 'Controller@index'

// 	]);
// Route::get('/', [
//     'as' => 'home',
// 	'uses' => 'HomeController@index'
// ]);

// Route::get('/', [
//     'as' => 'home',
// 	'uses' => 'HomeController@index'
// ]);
// Route::get('/header', [
//     'as' => 'header',
// 	'uses' => 'HeaderController@index'
// ]);

// Route::get('/', [
// 	'as' => 'home',
// 	'uses' => 'Controller@index'

// 	]);
Route::get('/', [
    'as' => 'home',
	'uses' => 'HomeController@index'
]);
Route::get('header', [
    'as' => 'header',
	'uses' => 'HeaderController@index'
]);
Route::get('pho', [
    'as' => 'pho',
	'uses' => 'PhoController@index'
]);


// Route::get('/', function()
// {
//     return View::make('common.pho');
// });
// Route::get('/pho', function()
// {
//     return View::make('common.pho');
// });
