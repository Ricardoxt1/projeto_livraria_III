<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function index(Customer $customer)
    {
        $customers = $customer->all();
        return view('app.customer.index', [
            'title' => 'Listagem de usuario', 'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function create(Customer $customer)
    {
        //
        return view('app.customer.create', [
            'title' => 'Cadastro de usuario', 'customer' => $customer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Models\Customer $customer
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $customer)
    {
        //
        $customer->create($request->all());
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //

        return view('app.customer.create', [
            'title' => 'Editar usuario', 'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
        $customer->update($request->all());
        return redirect()->route('customer.index', ['customers' => $customer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
