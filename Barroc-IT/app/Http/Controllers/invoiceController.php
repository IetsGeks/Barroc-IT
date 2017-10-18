<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invoiceController extends Controller
{
    public function add_invoice(Request $request)
    {
        $this->validate($request,[
           'amount' => 'required|integer|min:0' ,
            'description' => 'required|string|min:10'
        ]);

        $invoice = new \App\Invoice();
        $invoice->customer_id = $request->customer_id;
        $invoice->project_id = $request->project_id;
        $invoice->amount = $request->amount;
        $invoice->description = $request->description;
        $invoice->save();

        return back()->with('succes', 'invoice added succesfully');

    }
}
