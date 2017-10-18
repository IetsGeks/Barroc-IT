<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class financeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::user()->type == 'finance' || \Auth::user()->type == 'superadmin')
        {
        $customers = \App\Customer::all();
        $finances = \App\Finance::all();
        $projects = \App\Project::all();
        return view('finance/index')->with('finances', $finances)->with('customers', $customers)->with('projects', $projects);
        }
        return abort(403, 'Unauthorized.');
    }


    public function finish($id)
    {
        $project = \App\Project::find($id);
        $project->active = 0;
        $project->save();

        return redirect('finance')->with('succes', 'project is now inactive');
    }

    public function inactivate_client($id)
    {
        $customer = \App\Customer::find($id);
        $customer->active = 0;
        $customer->save();

        return redirect('finance')->with('succes', 'client is now inactive');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::user()->type == 'finance' || \Auth::user()->type == 'superadmin')
        {

        }
        return abort(403, 'Unauthorized.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (\Auth::user()->type == 'finance' || \Auth::user()->type == 'superadmin')
        {

        }
        return abort(403, 'Unauthorized.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (\Auth::user()->type == 'finance' || \Auth::user()->type == 'superadmin')
        {

        $user = \App\Finance::find($id);
        $customers = \App\Customer::all();
        $projects = \App\Project::find($id);
        $invoices = \App\Invoice::all();

        return view('finance/show')->with('user', $user)->with('customers', $customers)->with('project', $projects)->with('invoices', $invoices);
        }
        return abort(403, 'Unauthorized.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Auth::user()->type == 'finance' || \Auth::user()->type == 'superadmin')
        {

        }
        return abort(403, 'Unauthorized.');
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
        if (\Auth::user()->type == 'finance' || \Auth::user()->type == 'superadmin')
        {

        }
        return abort(403, 'Unauthorized.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (\Auth::user()->type == 'finance' || \Auth::user()->type == 'superadmin')
        {

        }
        return abort(403, 'Unauthorized.');
    }

}
