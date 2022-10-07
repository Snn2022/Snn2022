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
        $profit_percent = $request->loan_skim*30/100;
        $loan_payable =$request->loan_skim+$profit_percent;
       
        $data = New Account;
        $data = Account::where('member_id',$request->loan_receiver)->first();         
        $data->savings_skim = $request->saving_skim;
        $data->loan_skim = $request->loan_skim;
        $data->profit_loan = $profit_percent;
        $data->saving_status = $request->saving_skim;
        $data->loan_status = $loan_payable;
        $data->start_date = $request->loan_date;       
        $data->duration = $request->duration;
        $data->installment = $loan_payable/$request->duration;
        $data->update();
        
        //return view("templates.Loan.create", ['members' => $members]);
     }
}
