<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param \App\Models\Author $author
     * @return \Illuminate\Http\Response
     */
    public function index(Author $author)
    {
        $authors = $author->all();
        return view('app.author.index', [
            'title' => 'Listagem de autores', 'authors' => $authors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param \App\Models\Author $author
     * @return \Illuminate\Http\Response
     */
    public function create(Author $author)
    {
        //
        return view('app.author.create', [
            'title' => 'Cadastro de autores', 'author' => $author
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Models\Author $author
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Author $author)
    {
        //
        $author->create($request->all());
        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author, Request $request)
    {
        //
        
        return view('app.author.create', ['title' => 'Editar autor(a)', 'author' => $author, 'request' => $request]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
        $author->update($request->all());
        return redirect()->route('author.index', ['authors' => $author]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
        return redirect()->route('author.index');
    }
}
