<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;
class ProductController extends Controller
{
    //
    public function index(Request $request ) {
        $data = Tshirt::all();        
        return view("templates.Products.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }
}
