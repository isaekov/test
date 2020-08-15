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
        $authors =  Author::all()->toArray();

        return view("admin.author.index", compact("authors"));
    }


    public function create()
    {
        return view("admin.author.create");
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
        ]);

        Author::create($request->all());

//        return redirect()->route('admin.author.index')
//            ->with('success','Product created successfully.');
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
