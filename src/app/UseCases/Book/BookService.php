<?php


namespace App\UseCases\Book;


use App\Entity\Author;
use App\Entity\Book;
use Illuminate\Http\Request;

class BookService
{
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
}
