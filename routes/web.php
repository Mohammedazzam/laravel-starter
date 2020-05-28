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
//    return view('welcome')->with('data',2);
    $data = [];
    $data['name'] = 'mohammed Azzam';
    return view('welcome',$data);
});


Route::get('/test', function () {
    return 'welcome test 1';
});


Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});


Route::group(['prefix' => 'users'],function (){

    Route::get('/',function (){
        return 'Mohammed';
    });
});


Route::get('check',function (){
    return "Middleware";
})->middleware('auth');



Route::get('second','Front\SecondController@showString');

Route::resource('new','NewsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
