<?php


namespace App\Http\Controllers\Guest;


use App\Entity\Author;
use App\Http\Controllers\Controller;

class ShowAuthorsController extends Controller
{
    public function __invoke()
    {
        $authors = Author::all();
        return view("guest.author.index", compact("authors"));
    }
}
