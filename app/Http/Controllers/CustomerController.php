<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $customers = Customer::all();
       return view('Admin.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'name'=>'required',
           'phone'=>'required',
           'address'=>'required',
        ]);
        $requestData = $request->all();
        Customer::create($requestData);
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customers = Customer::find($id);
        return view('Admin.show', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($customer )
    {
        $customers = Customer::find($customer);
        return view('Admin.edit', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
    
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
    
        return redirect()->route('customers.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customers = Customer::find($id);

        $customers->delete();
        return redirect()->route('customers.index');
    }
}
