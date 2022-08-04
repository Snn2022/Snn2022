<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceHeader;

class InvoiceController extends Controller
{
    public function index(Request $request ) {
        $data = InvoiceHeader::all();        
        return view("templates.Invoice.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }

    //set invoice header
    public function setHeader(Request $request ) {
        $data = $request->all();
        InvoiceHeader::create($data);
        session()->flash('success','Invoice Header created successfully..!!');
        return redirect()->back(); 
    }
}
