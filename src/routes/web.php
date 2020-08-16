<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/books', 'Guest\ShowBooksController')->name('books');
Route::get('/authors', 'Guest\ShowAuthorsController')->name('authors');
//Route::get('/register', 'Auth\RegisterController@form')->name('form');
//Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::group([
    "prefix" => "admin",
    "as" => "admin.",
    "namespace" => "Admin",
    "middleware" => ["auth"],
    "name" => "admin"
], function () {
    Route::get("/", "HomeController@index")->name("home");
    Route::resource("book", "BookController");
    Route::resource("author", "AuthorController");
    Route::get('/author/{author_id}/books',"AuthorController@getAuthorBooks")->name("books");
    Route::get('/book/{book_id}/authors',"BookController@getBooksAuthor")->name("books");
    Route::delete('/author/{author}/{book}/remove',"AuthorController@removeAuthorBook")->name("remove");
    Route::delete('/book/{book}/{author}/remove',"BookController@removeBookAuthor")->name("remove");
});


