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

Route::get('/',[
    'uses'=>"TemplatesController@page1",
    'as'=>'templates.page1'
]);

Route::get('/page2', [
    'uses'=>"TemplatesController@page2",
    'as'=>'templates.page2'
]);

Route::get('/page3', [
    'uses'=>"TemplatesController@page3",
    'as'=>'templates.page3'
]);
Route::get('/page4',[
    'uses'=>"TemplatesController@page4",
    'as'=>'templates.page4'
]);
Route::get('/page5', [
    'uses'=>"TemplatesController@page5",
    'as'=>'templates.page5'
]);
Route::get('/page6', [
    'uses'=>"TemplatesController@page6",
    'as'=>'templates.page6'
]);

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

    Route::get('/configuracion',[
        'uses'=>"ViewsController@config",
        'as'=>'admin.config'
    ]);
});

