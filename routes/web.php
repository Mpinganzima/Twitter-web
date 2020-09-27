<?php

use Illuminate\Support\Facades\Route;

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


//Route:: get('/test', function(){
//
//    return ('welcome');
//});


//Route:: get('/', function(){
//
////    return  view('pages');
//    return('hello ');
//});


//Route:: get('/hello', function(){
//
////    return  view('pages');
//    return('hello world ');
//});

//Route:: get('/Home', function(){
//
//    return  view('pages.Home');
//
//});
Route:: get('/about', function() {

    return view('pages.about');

});
Route:: get('/home', function() {

    return view('pages.home');

});


Auth::routes();
Route::get('/
', 'HomeController@index')->name('home');
