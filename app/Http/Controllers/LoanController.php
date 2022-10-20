<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Account;
use App\Models\Transactions;
use App\Models\GeneralReport;
use Carbon\Carbon;

class LoanController extends Controller
{
    public function index(Request $request) {      
        $data = Account::whereNotNull('loan_skim')->get();       
        
        return view("templates.Loan.index", ['data'=> $data]);
     }
    public function loanCreate(Request $request) {      
        $members = Account::whereNull('loan_status')->get(); 
        $paidMembers = Account::where('loan_status', '<=', 50)->get(); 
 
        return view("templates.Loan.create", ['members' => $members, 'paidMembers' => $paidMembers]);
     }
    public function loanSubmit(Request $request) { 
        
        if(is_null($request->loan_skim)){
        //date calculation
        $start = Carbon::parse($request->custom_date);
        $expiry = Carbon::parse($request->custom_date)->addDays($request->duration);
        //$start = Carbon::now();
        //$expiry = Carbon::today()->addDays($request->duration);

        $data = New Account;
        $data = Account::where('member_id',$request->loan_receiver)->first();         
        $data->book_no = $request->book_no;
        $data->savings_skim = $request->saving_skim; 
        $data->saving_status = $request->saving_skim;       
        $data->start_date = $start ;      
        $data->expire_date = $expiry;
        $data->update();

        session()->flash('success',' সঞ্চয় ‍স্কিম সম্পন্ন হয়েছে।..!!');  
        return redirect()->back();   
        }else{
           
        //calculate profit amount on 30%
        $installment = $request->duration;
        $profit_percent = 30;
        $profit_loan = $request->loan_skim * $profit_percent / $installment;

        //calculate security money as saving on loan skim
        $security_money =$request->loan_skim *10 / 100;
        //calculate total payable amount on 30%
        $loan_payable =$request->loan_skim + $profit_loan;

        //date calculation
        $start = Carbon::parse($request->custom_date);
        $expiry = Carbon::parse($request->custom_date)->addDays($request->duration);
        //$start = Carbon::now();
        //$expiry = Carbon::today()->addDays($request->duration);

        $data = New Account;
        $data = Account::where('member_id',$request->loan_receiver)->first();         
        $data->book_no = $request->book_no;
        $data->savings_skim = $request->saving_skim;
        $data->loan_skim = $request->loan_skim;
        $data->profit_loan = $profit_loan;
        $data->saving_status = $security_money;
        $data->loan_status = $loan_payable;
        $data->start_date = $start ;      
        $data->expire_date = $expiry;      
        $data->duration = $installment;
        $data->installment = $installment;
        $data->per_installment = $loan_payable / $installment;
        $data->update();

        $transaction= New Transactions;
            $transaction->member_id = $request->loan_receiver;
            $transaction->date = $start;
            $transaction->saving = $security_money;
            $transaction->collector_id = $request->collector_name;
            $transaction->save();
        
            $generalReport = New GeneralReport;
            $transaction= Transactions::where('member_id', $request->loan_receiver)->first();
            $generalReport->date = $start;
            $generalReport->source = $request->loan_receiver;
            $generalReport->gl_head = 'collection';
            $generalReport->amount = $transaction->saving;
            $generalReport->save();

        session()->flash('success',' লোন প্রদান সম্পন্ন হয়েছে।..!!');  
        return redirect()->back();   
        }
        
     }

     public function nameSearchCollection(Request $request ) {       
        $searchName = $request->collection_report_member; 
        $data = Account::whereNotNull('loan_skim')
        ->where('member_id',$searchName)->get();
               
       
        $members = Members::all();
         return view("templates.loan.memberdetails",['data' => $data, 'members' => $members]);             
     }
     public function getdetails(Request $request, $id ) {       
        $data = Account::find($id)->get();
        return $data;
     }
}