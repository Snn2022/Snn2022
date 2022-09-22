<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\collection;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    public function index(Request $request) { 
        $data = Package::where('user_id',Auth::user()->id)->get();        
        $data->total = $data->tShirt_size*$data->participant_qty;
     return view("templates.Payment.index",['data'=>$data]);
 }

}
