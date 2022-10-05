<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MembersController extends Controller
{
     //index
     public function index(Request $request) {      
       $members = Members::all(); 

       return view("templates.Members.index",['members'=>$members]);
    }

     public function memberCreate(Request $request) {
       // $profiles = Profile::where('user_id',Auth::user()->id)->first();       
               
        return view("templates.Members.create");
    }
   
     public function memberStore(Request $request) { 
      $memberId = Members::get('member_id')->max();    
      $data= New Members;

      $data->member_id = $request->member_id;

      $data->member_name= $request->member_name;
      $data->father_name= $request->father_name;
      $data->mother_name= $request->mother_name;
      $data->spouse_name= $request->spouse_name;
      $data->nid_number= $request->nid_number;
      $data->village= $request->village;
      $data->post= $request->post;
      $data->union= $request->union;
      $data->thana= $request->thana;
      $data->district= $request->district;
      $data->phone= $request->phone;

      $url= "storage/";
      $photo= $request->file('photo');
      $name= $photo->getClientOriginalName();
      $storage= $photo->storeAs("public/uploads",$name);
      $photo_path = 'storage/uploads/'.$name;
      $data->photo= $photo_path;     
      $data->save();
        
       //Members::create($data);        
       session()->flash('success',' নতুন সদস্য যুক্ত হয়েছে।..!!');  
       return redirect()->back();         
        //return view("templates.Members.create");
    }

    public function memberProfile(Request $request, $id) {
      $data = Members::find($id);   
           
       return view("templates.Members.profile",['data' => $data]);
   }
}
