<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Account;

class LoanController extends Controller
{
    public function index(Request $request) {      
        $data = Account::all();
        
        return view("templates.Loan.index", ['data'=> $data]);
     }
    public function loanCreate(Request $request) {      
        $members = Members::all(); 
 
        return view("templates.Loan.create", ['members' => $members]);
     }
    public function loanSubmit(Request $request) {  
        $profit_perctnt = $request->loan_skim*30/100;
        $profit =$request->loan_skim+$profit_perctnt;
        $data = New Account;
      $data = Account::where('member_id',$request->loan_receiver)->first();         
        $data->savings_skim = $request->loan_skim;
        $data->start_date = $request->loan_date;       
        $data->duration = $request->duration;
        $data->installment =  $profit/$request->duration;
        $data->update();
        
        //return view("templates.Loan.create", ['members' => $members]);
     }
}
