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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
//Route::get('/admin', 'Admin\HomeController@index')->name('admin');


Route::get('/register', 'Auth\RegisterController@form')->name('form');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::group([
    "prefix" => "admin",
    "as" => "admin.",
    "namespace" => "Admin",
    "middleware" => ["auth"]
], function () {
    Route::get("/", "HomeController@index")->name("home");
    Route::resource("book", "BookController");
    Route::resource("author", "AuthorController");
//    Route::get('/{id}/books',"AuthorController@getAuthorBooks");
});


