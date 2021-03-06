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
    return view('landing');
}) -> name('a');


Route::get('/test/{id}', function () {
    return $id;
})->name('b');


Route::namespace('Front')->group(function(){

    Route::get('users','UserController@showUserName');
});

 

Route ::group(['namespace'=>'Admin'],function(){
    Route::get('second','SecondContrller@showString');
});


Route::get('index','Front\UserController@getIndex');
Route::resource('news','NewsController');
// route parameters .

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
