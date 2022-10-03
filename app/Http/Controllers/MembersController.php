<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MembersController extends Controller
{
     //index
     public function index(Request $request) {
      $memberId = Members::latest('member_id')->get();
       //$members = Members::all(); 
return $memberId;
       // return view("templates.Members.index",['members'=>$members]);

    }
     public function memberCreate(Request $request) {
       // $profiles = Profile::where('user_id',Auth::user()->id)->first();       
               
        return view("templates.Members.create");
    }
     public function memberStore(Request $request) { 
         
      $data= New Members;

      $data->member_id = $request->username;

      $data->member_name= $request->username;
      $data->father_name= $request->username;
      $data->mother_name= $request->username;
      $data->spouse_name= $request->username;
      $data->nid_number= $request->username;
      $data->village= $request->username;
      $data->post= $request->username;
      $data->union= $request->username;
      $data->thana= $request->username;
      $data->district= $request->username;
      $data->phone= $request->username;


      $data->photo= $request->username;
      $data->nid_photo= $request->username;
      

      $url= "storage/";
      $avatar= $request->file('avatar');
      $name= $avatar->getClientOriginalName();
      $path= $avatar->storeAs("uploads",$name);

      $register->avatar= $path;
      $register->imgpath= $url.$path;
      $register->save();
        
       Members::create($data);        
       session()->flash('success',' নতুন সদস্য যুক্ত হয়েছে।..!!');  
       return redirect()->back();         
        //return view("templates.Members.create");
    }
}
