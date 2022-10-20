<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Account;

class BypassController extends Controller
{
     public function index(Request $request) {      
        $lastmemberId = Members::get('member_id')->max();     
        
        return view("templates.Bypass.index",['lastmemberId' => $lastmemberId]);
     }
   
     public function bypassMemberStore(Request $request) { 
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
        
         $data->save();
           
          //Members::create($data);        
          session()->flash('success',' নতুন সদস্য যুক্ত হয়েছে।..!!');  
          return redirect()->back(); 
         }     
          
       }

public function bypassloanCreate() {
    $members = Account::whereNull('loan_status')->get(); 
    $paidMembers = Account::where('loan_status', '<=', 50)->get();
    return view("templates.Bypass.create",['members' => $members, 'paidMembers' => $paidMembers]);
}
    }