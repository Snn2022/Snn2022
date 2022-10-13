<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transactions;
use App\Models\GeneralReport;
use Carbon\Carbon;



class TransactionController extends Controller
{
    public function index(Request $request ) {
        $today = Carbon::today();
         $transaction = Transactions::where('date',$today)->get();
              
        return view("templates.Collection.index",['transaction' => $transaction]);
             
    }

    public function search(Request $request ) {
            $data = Account::where('book_no',$request->book_no)->first();

            return view("templates.Collection.index",['data' => $data]);             
    }

    public function transaction(Request $request ) {
        $today = Carbon::today();
        $check = Transactions::where('member_id',$request->member_id)->value('date'); 
                  
       if($today == $check){       
        session()->flash('error',' দু:খিত আজকের কিস্তি ইতিমধ্যে জমা হয়েছে..!!');  
        return redirect()->route('collection');
       }else{
      
       
        $transaction= New Transactions;
        $transaction->member_id = $request->member_id;
        $transaction->date = $today;
        $transaction->saving = $request->daily_saving;
        $transaction->installment = $request->installment_day;
        $transaction->amount = $request->installment_rate * $request->installment_day;
        $transaction->collector_id = $request->collector_name;
        $transaction->save();
        
        $account = New Account;
        $account = Account::where('member_id',$request->member_id)->first();
        //status amount for saving and loan updates
        $saving_update = $account->saving_status + $request->daily_saving;
        $loan_update = $account->loan_status - $request->installment_rate * $request->installment_day;

        $account->saving_status = $saving_update;        
        $account->loan_status = $loan_update;
        $account->update();

        $generalReport = New GeneralReport;
        $transaction= Transactions::where('member_id',$request->member_id)->first();
        $generalReport->date = $today;
        $generalReport->source = $request->member_id;
        $generalReport->gl_head = 'collection';
        $generalReport->amount = $transaction->amount+$transaction->saving;
        $generalReport->save();

        session()->flash('success',' কালেকশন সম্পন্ন হয়েছে।..!!');  
        return redirect()->route('collection'); 
       }
                 
    }
}
