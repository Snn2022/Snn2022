<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transactions;
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
        $check = Transactions::find($request->member_id)->where('date',$today)->first();
       
        if(empty( $check == 'NULL')){
            return 'no data';
        }else{
            return 'check date';
        }
       if($today == $check->date){
       
        session()->flash('error',' দু:খিত আজকের কিস্তি ইতিমধ্যে জমা হয়েছে..!!');  
        return redirect()->route('collection');
       }else{
      
        $date = Carbon::today();
        $transaction= New Transactions;
        $transaction->member_id = $request->member_id;
        $transaction->date = $date;
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

        session()->flash('success',' কালেকশন সম্পন্ন হয়েছে।..!!');  
        return redirect()->route('collection'); 
       }
                 
    }
}
