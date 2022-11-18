<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Package;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller {
    public function index(Request $request) 
    {          
        $data = Product::all();             
        $orders = Orders::where('user_id',Auth::user()->id)->get();
        //$package = Package::find($package->tShirt_id)->getTshirt; 
        //return $package;
        return view("templates.Orders.index",['data'=>$data,'orders'=>$orders]);
    }
    public function submitOrders(Request $request)
    {          
        $data = $request->all();
        Orders::create($data);
    
        session()->flash('success','Product added ..!!');  
        return redirect()->back();  
    }
    public function ordersDelete($id)
    {          
        $delete = Orders::find($id)->delete();
        session()->flash('erase','item removed !!');  
        return redirect()->back(); 
    }
}