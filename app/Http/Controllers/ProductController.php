<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index(Request $request ) {
        $data = Product::all();        
        return view("templates.Products.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }
    public function store(Request $request ) {
        $data = $request->all();
        Product::create($data);
        
        session()->flash('success','Product created successfully..!!');  
        return redirect()->back();                 
    }

    public function fetchProducts(Request $request) {
        $data = Product::all();
        return response()->json($data);              
    }
    public function fetchProductsData(Request $request, $id) {
        $data = Product::findOrFail($id);
        return response()->json($data);              
    }
  
}
