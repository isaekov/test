<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{

    public function index()
    {
        //
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

        return redirect()->route('admin.book.index')
            ->with('success','Product created successfully.');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
