<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceHeader;

class InvoiceController extends Controller
{
    public function index(Request $request ) {
        $data = $request->all();
        session()->flash('success','Invoice created successfully..!!');
        return redirect()->route('main');       
    }

    //set invoice header
    public function setHeader(Request $request ) {
        $data = $request->all();
        InvoiceHeader::create($data);
        session()->flash('success','Invoice Header created successfully..!!');
        return redirect()->back(); 
    }
}
