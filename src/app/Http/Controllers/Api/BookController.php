<?php


namespace App\Http\Controllers\Api;


use App\Entity\Author;
use App\Entity\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listAll()
    {
        $books = Book::all();
        return response()->json($books);
    }

    public function byId($id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }

    public function update(Request $request, Book $book)
    {
        $data = $this->validate($request, [
            "name" => 'required|string|max:255',
            "description" => 'required|string|max:255',
            "price" => "numeric"
        ]);
        $book->update($data);
        $book->authors()->attach(Author::find($request->authors_id));
        return response()->json($book);
    }

    public function delete(Book $book)
    {
        $book->authors()->detach();
        $book->delete();
        return response()->json([], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            "price" => "numeric"
        ]);
        $book = Book::create($request->all());
        $book->authors()->attach(Author::find($request->authors_id));
        return response()->json($book);
    }



}
