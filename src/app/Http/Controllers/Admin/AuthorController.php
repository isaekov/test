<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{

    public function index()
    {
        $authors =  Author::all();
        return view("admin.author.index", compact("authors"));
    }


    public function create()
    {
        $books = Book::all();
        return view("admin.author.create", compact("books"));
    }

    public function getAuthorBooks($id){
        $author = Author::find($id);
        $author->books;
        return view('admin.author.books')->with('author',$author);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
        ]);
        $author = Author::create($request->all());
        foreach ($request->books_id as $book){
            $author->books()->save(Book::find($book));
        }

        $author->books;
        return redirect()->route('admin.author.index')
            ->with('success','Product created successfully.');
    }


    public function show($id)
    {
        return [];
    }


    public function edit(Author $author)
    {
        return view("admin.author.edit", compact("author"));
    }


    public function update(Request $request, Author $author)
    {
        $data = $this->validate($request, [
            "name" => 'required|string|max:255',
            "last_name" => 'required|string|max:255',
        ]);
        $author->update($data);
        return redirect()->route("admin.author.index");

    }


    public function destroy($id)
    {
        //
    }
}
