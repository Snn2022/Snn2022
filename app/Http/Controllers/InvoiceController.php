<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceHeader;
use App\Models\Invoice;
use Illuminate\Support\Carbon;


class InvoiceController extends Controller
{
    public function index(Request $request ) {
        $data = InvoiceHeader::all();        
        return view("templates.Invoice.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }

    public function create(Request $request) {
        $data = Invoice::get('invoice_no')->max(); 
        
        return view("templates.CreateInvoice.index",['data'=>$data]);        
    }

    public function invoiceCreate(Request $request) {
        $data = $request->all();
        Invoice::create($data);
       
        session()->flash('success','Customer Information submitted successfully..!!');
        return redirect()->route('invoice-step2'); 
    }

    public function invoiceStep2(Request $request) {       
        $data = Invoice::all(); 
        return view("templates.CreateInvoice.step2",['data'=>$data]); 
    }

    //set invoice header
    public function setHeader(Request $request ) {
        $data = $request->all();
        InvoiceHeader::create($data);
        session()->flash('success','Invoice Header created successfully..!!');
        return redirect()->back(); 
    }
}
