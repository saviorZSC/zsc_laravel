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
Route::get('/commuity','nweaver\NweaverController@commuity');
Route::get('/commuity/create','nweaver\CommuityController@create');
Route::get('/commuity/edit/{id?}','nweaver\CommuityController@edit');
Route::post('/commuity/store','nweaver\CommuityController@store');
Route::get('/test','nweaver\NweaverController@test');