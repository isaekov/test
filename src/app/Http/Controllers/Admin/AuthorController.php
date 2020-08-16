<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\BookAuthor;
use App\Entity\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::all();
        return view("admin.author.index", compact("authors"));
    }


    public function create()
    {
        $books = Book::all();
        return view("admin.author.create", compact("books"));
    }

    public function getAuthorBooks($id)
    {
        $author = Author::find($id);
        return view('admin.author.books')->with('author', $author);
    }

    public function removeAuthorBook(Author $author, Book $book)
    {
        $author->books()->detach($book);
        return redirect()->route('admin.author.edit', ["author" => $author->id]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
        ]);
        $author = Author::create($request->all());
        $author->books()->attach(Book::find($request->books_id));
        $author->books;
        return redirect()->route('admin.author.index');
    }


    public function show($id)
    {
        return [];
    }


    public function edit(Author $author)
    {
        $books = Book::all();
        return view("admin.author.edit", compact("author", "books"));
    }


    public function update(Request $request, Author $author)
    {
        $data = $this->validate($request, [
            "name" => 'required|string|max:255',
            "last_name" => 'required|string|max:255',
        ]);
        $author->update($data);
        $author->books()->attach(Book::find($request->books_id));
        return redirect()->route("admin.author.edit", ["author" => $author->id]);
    }


    public function destroy(Author $author)
    {
        $author->books()->detach();
        $author->delete();
        return redirect()->route("admin.author.index");
    }
}
