<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //index
    public function index(Request $request) {
        $profiles = User::where('id',Auth::user()->id)->first();       
               
        return view("setting", ['profiles'=>$profiles]);
    }
    public function store(Request $request) {
        $data = $request->all();
        Profile::create($data);
        session()->flash('success','Submission success..!!');
        return redirect()->back(); 
    }
}
