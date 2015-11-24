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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi',function(){
    return 'hello world';
});
Route::get('/testPost',function() {
    $csrf_token = csrf_token();
    $form = <<<FORM
    <form action="/public/hello" method="POST">
        <input type="hidden" name="_token" value="{$csrf_token}" />
        <input type ="submit" value ="Test" />
    </form>
FORM;
    return $form;
    //laravel路由的get方法，用::（双冒号）表示，定义form表单，返回form表单
});
/*
Route::post('/hello',function(){
   return 'Hello laravel[POST]!';
});
//laravel路由的post方法，用::（双冒号）表示

*/
/*
Route::match(['get','post'],'/hello',function(){
   return 'Hello laravel[GET/POST]!';
});
//使用match方法，指定访问方式
*/

/*Route::get('/hello/{name}',function($name){
    return "Hello {$name}!";
});
//带参数的访问方法
*/
/*
Route::get('/hello/{name}/by/{user}',function($name,$user){
    return "Hello {$name} by {$user}!";
});
//laravel带多个参数以及设定常数路径的访问方法
*/
/*
Route::get('/hello/{name?}',function($name="laravel"){
    return "hello {$name}!";
});
可选参数
*/

Route::get('/hello/{$name?}',function($name="laravel"){
    return "Hello {$name}";
})->where('name','[A-Za-z]+');
//该条件约束意味着$name参数只能包含大小写字母，如果包含数字或中文就会抛出NotFoundHttpException异常。


