<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Library;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Book $book
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $books = $book->all();
        return view('app.book.index', [
            'title' => 'Listagem de livros', 'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param App\Models\Book $book
     * @param App\Models\Author $author
     * @param App\Models\Library $library
     * @param App\Models\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function create(Book $book, Author $author, Library $library, Publisher $publisher)
    {
        //
        $authors = $author->all();
        $libraries = $library->all();
        $publisher = $publisher->all();
        return view('app.book.create', [
            'title' => 'Adicionar livro', 'book' => $book, 'authors' => $authors, 'libraries' => $libraries, 'publishers' => $publisher
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Models\Book $book
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Book $book)
    {
        //
        $book->create($request->all());

        return redirect()->route('book.index', ['books' => $book]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param App\Models\Book $book
     * @param App\Models\Author $author
     * @param App\Models\Library $library
     * @param App\Models\Publisher $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, Author $author, Library $library, Publisher $publisher)
    {
        //
       
        $authors = $author->all();
        $libraries = $library->all();
        $publishers = $publisher->all();
        return view('app.book.create', [
            'title' => 'Editar livro', 'book' => $book, 'authors' => $authors, 'libraries' => $libraries, 'publishers' => $publishers
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        $book->update($request->all());
        return redirect()->route('book.index', ['books' => $book]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->route('book.index');
    }
}
