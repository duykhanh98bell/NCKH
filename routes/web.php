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

/*Route::get('/', function () {
    return view('welcome');
});*/

route::get('/',[
	'uses' => 'HomeController@projects',
	'as' => 'projects'
]);
route::get('/check',[
	'uses' => 'HomeController@check',
	'as' => 'check'
]);