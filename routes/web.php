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
route::get('projectDetail',[
	'uses'=>'HomeController@projectDetail',
	'as'=>'projectDetail'
]);
route::get('createProject',[
	'uses'=>'HomeController@createProject',
	'as'=>'createProject'
]);

route::get('createJob','HomeController@createJob')->name('createJob');
route::get('contact','HomeController@contact')->name('contact');