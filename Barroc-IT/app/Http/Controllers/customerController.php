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

        return view('sales/index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales/create');
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
            "residence2" => 'string|nullable',
            "contact" => 'string|required',
            "initials" => 'string|nullable|min:2',
            "tel" => 'numeric|required|min:10',
            "fax" => 'numeric|nullable|min:10',
            "email" => 'email|required'
        ]);

        $customer = new \App\Customer();
        $customer->company_name = $request->c_name;
        $customer->adress1 = $request->adress;
        $customer->postal_code1 = $request->zipcode;
        $customer->place_of_residence1 = $request->residence;
        $customer->adress2 = $request->adress2;
        $customer->postal_code2 = $request->zipcode2;
        $customer->place_of_residence2 = $request->residence2;
        $customer->contact_person = $request->contact;
        $customer->initials = $request->initials;
        $customer->telephone_number = $request->tel;
        $customer->email = $request->email;
        $customer->save();

        return view('sales/create')
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
        $customer = \App\Customer::find($id);
        $projects = \App\Project::all();

        $customer_id = $customer->customer_id;
        $projectsF = array();

        foreach ($projects as $project){
            if ($project->customer_id == $customer_id){
                array_push($projectsF, $project);
            }
        }

        return view('sales/customer')
            ->with('customer', $customer)
            ->with('projects', $projectsF);
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
