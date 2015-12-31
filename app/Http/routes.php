<?php

//网站界面的路由
Route::get('/','nweaver\NweaverController@index');
Route::get('/template','nweaver\NweaverController@template');
Route::get('/support','nweaver\NweaverController@support');
//讨论区路由
Route::group(['middleware' => 'auth'],function(){
    Route::get('/commuity','nweaver\CommuityController@index');
    Route::get('/commuity/create','nweaver\CommuityController@create');
    Route::patch('/commuity/{id}','nweaver\CommuityController@update');
    Route::get('/commuity/{id}','nweaver\CommuityController@show');
    Route::get('/commuity/{id}/edit','nweaver\CommuityController@edit');
    Route::post('/commuity/store','nweaver\CommuityController@store');
});

//登陆注册注销路由
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');
Route::get('auth/logout','Auth\AuthController@getLogout');

//功能区路由
Route::group(['middleware' => 'auth'],function(){
    //项目管理路由
    Route::get('/feature/project','nweaver\FeatureController@project');
    Route::get('/feature/project/{id}/task','nweaver\FeatureController@show');
    Route::delete('/feature/project/{id}','nweaver\FeatureController@destroy');
    Route::post('/feature/project/store','nweaver\FeatureController@store');
    Route::patch('/feature/project/{id}','nweaver\FeatureController@update');
    //任务管理的路由
    Route::post('/feature/task/store','nweaver\TaskController@store');
    Route::get('/feature/task/{id}','nweaver\TaskController@show');
    Route::patch('/feature/task/{id}','nweaver\TaskCOntroller@update');
    Route::delete('/feature/task/{id}','nweaver\TaskCOntroller@destroy');
});


// 在这一行下面

// 文件上传路由
Route::group(['middleware' => 'auth'],function(){
    Route::get('/feature/project/{id}/file', 'nweaver\UploadController@index');
    Route::get('/feature/project/upload/upload', 'nweaver\UploadController@index');
    Route::post('/feature/project/upload/file', 'nweaver\UploadController@uploadFile');
    Route::delete('/feature/project/upload/file', 'nweaver\UploadController@deleteFile');
    Route::post('/feature/project/upload/folder', 'nweaver\UploadController@createFolder');
    Route::delete('/feature/project/upload/folder', 'nweaver\UploadController@deleteFolder');
});


//后台管理路由：
// Admin area
Route::get('admin', function () {
    return redirect('/admin/post');
});
Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    resource('admin/post', 'PostController',['except' =>'show']);
    resource('admin/tag', 'TagController',['except' =>'show']);
    get('admin/upload', 'UploadController@index');
});

//博客路由
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');


