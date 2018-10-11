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

Route::get('/', function () {
    #$layout = 'tasty-master';
    #$layout = 'coffe-master';
    $layout = 'justice';
    #$layout = 'business';
    #return view('welcome',["layout"=>$layout]);
    return view('welcome',["layout"=>$layout]);
});

Route::get('/admin',function (){
    return view('adminlte::layouts.app');
});

Route::get('/login', function (){
   return view('vendor.adminlte.auth.login');
});

Route::post('/dologin',[
   'uses' => 'UserController@doLogin'
]);


Route::prefix('admin')->group(function (){
   Route::get('/users',[
       'uses' => 'ViewsController@getUserForm',
       'as' => 'admin.users'
   ]);

   Route::post('/user/register',[
       'uses' => 'UserController@Registrar'
   ]);

   Route::get('/user/all',[
      'uses' => 'UserController@getUsers'
   ]);


});

