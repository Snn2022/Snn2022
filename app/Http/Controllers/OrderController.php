<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Package;
use App\Models\Orders;
use App\Models\OrderInvoice;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller {
    public function index(Request $request) 
    {              
        $data = OrderInvoice::all();             
       
        return view("templates.Orders.index",['data'=>$data]);
    }
    public function createOrders(Request $request) 
    {          
        $data = Product::all();
        $orders = Orders::where('user_id',Auth::user()->id)
        ->where('status','queue')->get();
        //$package = Package::find($package->tShirt_id)->getTshirt; 
        //return $package;
        return view("templates.Orders.create",['data'=>$data,'orders'=>$orders]);
    }
    public function viewOrders($id)
    {
        $data = OrderInvoice::where('id',$id)->first();   
           
        $orders = Orders::where('order_id',$data['order_id'])->get();

        return view("templates.Orders.view-order",['data'=>$data,'orders'=>$orders]);
    }
    public function submitOrders(Request $request)
    {          
        $data = $request->all();
        Orders::create($data);
    
        session()->flash('success','Product added ..!!');  
        return redirect()->back();  
    }
    public function confirmOrders(Request $request)
    {   
        $order_id= '0'. Auth::user()->id.'0'. mt_rand(100, 999);         
        $data = Orders::where('user_id', Auth::user()->id)
        ->where('status','queue')->update([
            'status' => 'received',
            'order_id' => $order_id
        ]);

        $invoice = New OrderInvoice;
        $invoice->user_id = Auth::user()->id;
        $invoice->order_id =  $order_id;
        $invoice->save();
    
        session()->flash('success','Order Confirmed ..!!');  
        return redirect()->route('orders');  
    }
    public function ordersDelete($id)
    {          
        $delete = Orders::find($id)->delete();
        session()->flash('erase','item removed !!');  
        return redirect()->back(); 
    }
}