<?php


namespace App\Http\Controllers\Guest;


use App\Entity\Book;
use App\Http\Controllers\Controller;

class ShowBooksController extends Controller
{
    public function __invoke()
    {
        $books = Book::all();
        return view("guest.book.index", compact("books"));
    }

}
