<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
     //index
     public function index(Request $request) {
       // $profiles = Profile::where('user_id',Auth::user()->id)->first();       
               
        return view("templates.Members.index");
    }
     public function memberCreate(Request $request) {
       // $profiles = Profile::where('user_id',Auth::user()->id)->first();       
               
        return view("templates.Members.create");
    }
}
