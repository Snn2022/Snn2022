<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transactions;
use Carbon\Carbon;



class TransactionController extends Controller
{
    public function index(Request $request ) {
              
        return view("templates.Collection.index");
             
    }

    public function search(Request $request ) {
            $data = Account::where('book_no',$request->book_no)->first();

            return view("templates.Collection.index",['data' => $data]);             
    }

    public function transaction(Request $request ) {
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
