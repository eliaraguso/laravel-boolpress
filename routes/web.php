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

// Rotte pubbliche
Route::get('/', 'PageController@index');
Route::get('/blog', 'PostController@index')->name("posts.index");
Route::get('/blog/{slug}', 'PostController@show')->name("posts.show");


//Rotte autenticazione
Auth::routes();


//Rotte area admin
Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function(){
        
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');

});

