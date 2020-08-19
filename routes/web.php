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
route::get('createProject',[
	'uses'=>'HomeController@createProject',
	'as'=>'createProject'
]);
route::post('createProject',[
	'uses'=>'HomeController@saveProject',
	'as'=>'createProject'
]);
route::get('editProject/{id}',[
	'uses'=>'HomeController@editProject',
	'as'=>'editProject'
]);
route::post('editProject/{id}',[
	'uses'=>'HomeController@updateProject',
	'as'=>'updateProject'
]);
//==================================================

route::get('projectDetail',[
	'uses'=>'HomeController@projectDetail',
	'as'=>'projectDetail'
]);

//==================================================

route::get('/check/{id_da}',[
	'uses' => 'jobController@check',
	'as' => 'check'
]);
route::get('createJob/{id_da}','jobController@createJob')->name('createJob');
route::post('createJob/{id_da}','jobController@saveJob')->name('saveJob');
route::get('editJob/{id_cv}/{id_da}','jobController@editJob')->name('editJob');
route::post('editJob/{id_cv}/{id_da}','jobController@updateJob')->name('updateJob');

//==================================================

route::get('contact','UserController@contact')->name('contact');
route::get('create-user','UserController@create_user')->name('create-user');
route::post('create-user','UserController@post_register')->name('post-register');
route::get('edit-user/{id}','UserController@edit_user')->name('edit-user');
route::post('edit-user/{id}','UserController@update_user')->name('update-user');

route::get('/login', 'UserController@login')->name('login');
route::post('/login', 'UserController@postLogin')->name('postLogin');
route::get('logOut','UserController@logOut')->name('logOut');

//==================================================

route::get('/timeline', 'TimelineController@get_timeline')->name('get-timeline');
route::get('timelineName/{id}', 'TimelineController@get_timeline_cv')->name('get-timeline-cv');
route::get('time', 'TimelineController@get_time')->name('get-time');
route::get('timelineDetail/{id}', 'TimelineController@get_timeline_user')->name('get-timeline-user');