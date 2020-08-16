<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Author;
use App\Entity\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view("admin.book.index", compact("books"));
    }

    public function create()
    {
        $authors = Author::all();
        return view("admin.book.create", compact("authors"));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
//            'description' => 'required',
            "price" => "numeric"
        ]);
        $book = Book::create($request->all());
        $book->authors()->attach(Author::find($request->authors_id));
        return redirect()->route('admin.book.index');
    }


    public function show($id)
    {

    }

    public function removeBookAuthor(Book $book, Author $author)
    {
        $book->authors()->detach($author);
        return redirect()->route('admin.book.edit', ["book" => $book->id]);
    }


    public function edit(Book $book)
    {
        $authors = Author::all();
        return view("admin.book.edit", compact("book", "authors"));
    }


    public function update(Request $request, Book $book)
    {
        $data = $this->validate($request, [
            "name" => 'required|string|max:255',
//            "description" => 'required|string|max:255',
            "price" => "numeric"
        ]);
        $book->update($data);
        $book->authors()->attach(Author::find($request->authors_id));
        return redirect()->route("admin.book.edit", ["book" => $book->id]);
    }

    public function getBooksAuthor($id)
    {
        $book = Book::find($id);
        return view('admin.book.authors', compact("book"));
    }


    public function destroy(Book $book)
    {

        $book->authors()->detach();
        $book->delete();
        return redirect()->route("admin.book.index");
    }
}
