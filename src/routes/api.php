<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//
////
//Route::group([
//    "prefix" => "/v1/books"
//], function() {
//return response()->json(["name" => "hello"]);
//    });
//
//Route::get("v1/book", function () {
//    return response()->json(["name" => "hello"]);
//
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => '/v1/books',
    'middleware' => 'auth:api'
], function (){
    Route::get('/list', 'Api\BookController@listAll');
    Route::get('/{book}', 'Api\BookController@byId');
    Route::put('/{book}', 'Api\BookController@update');
    Route::delete('/{book}', 'Api\BookController@delete');
    Route::post('/create', 'Api\BookController@store');
//
//    Route::post('/update', 'ApiController@updateById');
//    Route::delete('/{id}', 'ApiController@deleteById')->where('id', '[0-9]+');
});

//Route::group(['namespace' => 'Api'], function () {
//    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'Api\Auth\RegisterController');
        Route::post('login', 'Api\Auth\LoginController');
        Route::post('logout', 'Api\Auth\LogoutController')->middleware('auth:api');
//});


