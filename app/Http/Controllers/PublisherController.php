<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Publisher $publisher)
    {
        //
        $publishers = $publisher->all();
        return view('app.publisher.index', [
            'title' => 'Listagem de editoras', 'publishers' => $publishers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function create(Publisher $publisher)
    {
        //
        return view('app.publisher.create', [
            'title' => 'Cadastro de editora', 'publisher' => $publisher
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Publisher $publisher)
    {
        //
        $publisher->create($request->all());
        return redirect()->route('publisher.index');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        //
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
        //
        return view('app.publisher.create', [
            'title' => 'Editar editora', 'publisher' => $publisher
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
    {
        //
        $publisher->update($request->all());
        return redirect()->route('publisher.index', ['publishers' => $publisher]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        //
        $publisher->delete();
        return redirect()->route('publisher.index');
    }
}
