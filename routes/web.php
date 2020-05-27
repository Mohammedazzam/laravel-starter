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
    return view('welcome');
});


Route::get('/test', function () {
    return 'welcome test 1';
});



Route::group(['prefix' => 'users'],function (){

    Route::get('/',function (){
        return 'Mohammed';
    });
});


Route::get('check',function (){
    return "Middleware";
})->middleware('auth');