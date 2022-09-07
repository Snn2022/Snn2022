<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    //
    public function index(Request $request) {          
           $data = Tshirt::all();             
           $package = Package::where('user_id',Auth::user()->id)->get();
           //$package = Package::find($package->tShirt_id)->getTshirt; 
           //return $package;
        return view("templates.Package.index",['data'=>$data,'package'=>$package]);
    }
    public function submitParticipant(Request $request) {          
           $data = $request->all();
           Package::create($data);
        
           session()->flash('success','Participant add success..!!');  
           return redirect()->back();  
    }
    public function fetchPackage(Request $request) {          
          $data = Package::find(1)->getTshirt; 
          return $data;
          //return view("templates.Package.index",['package'=>$package]);
    }
}
