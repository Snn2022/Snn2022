<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request ) {
        $data = $request->all();
        session()->flash('success','Invoice created successfully..!!');
        return redirect()->route('main');       
    }
}
