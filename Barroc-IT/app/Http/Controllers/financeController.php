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
            $users = \App\Finance::all();
            return view('finance/index')->with('users', $users)->with('customers', $customers);
        }
        return abort(403, 'Unauthorized.');

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
            $customer = \App\Customers::find($id);
            $projects = \App\Projects::find($id);

            return view('finance/show')->with('user', $user)->with('customer', $customer)->with('project', $projects);
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
