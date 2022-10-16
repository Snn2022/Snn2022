<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Account;

class MembersController extends Controller
{
     //index
     public function index(Request $request) {      
       $members = Members::all(); 
      
       return view("templates.Members.index",['members'=>$members]);
    }

     public function memberCreate(Request $request) {      
       $lastmemberId = Members::get('member_id')->max();       
             
        return view("templates.Members.create",['lastmemberId' => $lastmemberId]);
    }
   
     public function memberStore(Request $request) { 
     //check if member exist
      $memberID = Members::where('nid_number', $request->nid_number)->first();     
      if(!empty($memberID)){
        session()->flash('error',' দুখিত: উক্ত ভোটার আইডি  ইতিমধ্যে ব্যবহৃত হচ্ছে ...!!');  
        return redirect()->back();
      }else{
        $accounts= New Account;
      $sku = '000'.$request->member_id;;
      $accounts->member_id = $sku;     
      $accounts->member_name= $request->member_name;
      $accounts->save();
      $data= New Members;
      $data->member_id =  $sku;      
      $data->member_name= $request->member_name;
      $data->father_name= $request->father_name;
      $data->mother_name= $request->mother_name;
      $data->spouse_name= $request->spouse_name;
      $data->nid_number= $request->nid_number;
      $data->dob= $request->dob;
      $data->village= $request->village;
      $data->post= $request->post;
      $data->union= $request->union;
      $data->thana= $request->thana;
      $data->district= $request->district;
      $data->phone= $request->phone;

      $url= "storage/";
      $photo= $request->file('photo');
      $photo_name= $photo->getClientOriginalName();
      $photo_storage= $photo->storeAs("public/uploads",$photo_name);
      $photo_path = 'storage/uploads/'.$photo_name;

      $nid_photo= $request->file('nid_photo');
      $nid_photo_name= $nid_photo->getClientOriginalName();
      $nid_photo_storage= $nid_photo->storeAs("public/uploads",$nid_photo_name);
      $nid_photo_path = 'storage/uploads/'.$nid_photo_name;

      $data->photo= $photo_path;     
      $data->nid_photo= $nid_photo_path; 
      $data->save();
        
       //Members::create($data);        
       session()->flash('success',' নতুন সদস্য যুক্ত হয়েছে।..!!');  
       return redirect()->back(); 
      }     
       
    }

    public function memberProfile(Request $request, $id) {
      $data = Members::find($id);   
           
       return view("templates.Members.profile",['data' => $data]);
   }
}