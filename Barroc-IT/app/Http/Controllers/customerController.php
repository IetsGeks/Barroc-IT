<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = \App\Customer::all();

        //index needs: debit, limit, id, name, company, tel, email and zip (zip as in zipcode)
        //when sending information make sure the keys are as the names above. else you have to change it here or in index.
        //make sure the project info (company, debit, limit) are only from the active project the customer can only have 1 active

        return view('customerSearch/index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customerSearch/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "c_name" => 'string|nullable',
            "adress" => 'string|required',
            "zipcode" => 'string|required',
            "residence" => 'string|required',
            "adress2" => 'string|nullable',
            "zipcode2" => 'string|nullable',
            "residence2" => 'string|nullabe',
            "contact" => 'string|required',
            "initials" => 'string|nullable|min:2',
            "tel" => 'numeric|required|min:10'
        ]);

        //$customer = new \App\Customer();
        //$customer->item = $request->input_name;

        //$customer->save();
        return view('customerSearch/create')
            ->with('massage', "saved");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('customerSearch/customer')
            ->with('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
