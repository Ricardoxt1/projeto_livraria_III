<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param \App\Models\Rental $rental
     * @return \Illuminate\Http\Response
     */
    public function index(Rental $rental)
    {
        //
        $rentals = $rental->all();
        return view('app.rental.index', [
            'title' => 'Listagem de alugueis', 'rentals' => $rentals
        ]);
    }

    /**
     * Show the form for creating a new rental.
     * @param \App\Models\Rental $rental
     * @param \App\Models\Book $book
     * @param \App\Models\Customer $customer
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function create(Rental $rental, Book $book, Customer $customer, Employee $employee)
    {
        //
        $books = $book->all();
        $customers = $customer->all();
        $employees = $employee->all();
        return view('app.rental.create', [
            'title' => 'Cadastro de aluguel', 'rental' => $rental, 'books' => $books, 'customers' => $customers, 'employees' => $employees
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Models\Rental  $rental
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Rental $rental)
    {
        //
        $rental->create($request->all());
        return redirect()->route('rental.index', ['rentals' => $rental]);
    }

    /**
     * Display the specified resource.
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Rental $rental
     * @param \App\Models\Book $book
     * @param \App\Models\Customer $customer
     * @param \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental, Book $book, Customer $customer, Employee $employee)
    {
        //
        $books = $book->all();
        $customers = $customer->all();
        $employees = $employee->all();
        return view('app.rental.create', [
            'title' => 'Editar aluguel', 'rental' => $rental, 'books' => $books, 'customers' => $customers, 'employees' => $employees
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
        $rental->update($request->all());
        return redirect()->route('rental.index', ['rentals' => $rental]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
        $rental->delete();
        return redirect()->route('rental.index');
    }
}
