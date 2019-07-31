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

Route::get('/',function(){
    return view("welcome");
});

Route::get('/home', function (){
//return view('home');
return view("content");

});

Route::get('db','DbController@index');

Route::get('/test/{nama}','indexcontroller@google');
Route::get('/form',function(){
    return view("request_post");
});
Route::post('/form/formproses','indexcontroller@form');

Route::get('/sekolah','indexcontroller@index');

Route::get('/cleaningservice','yieldcontrol@index');