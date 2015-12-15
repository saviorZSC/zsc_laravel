<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/hi', function () {
    return view('welcome');
});*/

Route::get('/','nweaver\NweaverController@index');
Route::get('/template','nweaver\NweaverController@template');
Route::get('/support','nweaver\NweaverController@support');
Route::get('/commuity','nweaver\CommuityController@index');
Route::get('/commuity/create','nweaver\CommuityController@create');
Route::patch('/commuity/{id}','nweaver\CommuityController@update');
Route::get('/commuity/{id}','nweaver\CommuityController@show');
Route::get('/commuity/{id}/edit','nweaver\CommuityController@edit');
Route::post('/commuity/store','nweaver\CommuityController@store');
Route::get('/test','nweaver\NweaverController@test');

//登陆注册注销路由
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');
Route::get('auth/logout','Auth\AuthController@getLogout');


//功能区路由
Route::get('/feature/project','nweaver\FeatureController@project');
Route::get('/feature/project/{id}','nweaver\FeatureController@show');
Route::delete('/feature/project/{id}','nweaver\FeatureController@destroy');


//测试功能
Route::post('/feature/project/store','nweaver\FeatureController@store');
Route::patch('/feature/project/{id}','nweaver\FeatureController@update');

//任务功能区
Route::post('/feature/task/store','nweaver\TaskController@store');
Route::get('/feature/task/{id}','nweaver\TaskController@show');
Route::patch('/feature/task/{id}','nweaver\TaskCOntroller@update');
Route::delete('/feature/task/{id}','nweaver\TaskCOntroller@destroy');