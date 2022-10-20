<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralReport;
use App\Models\Members;
use App\Models\Account;
use App\Models\Transactions;



class ReportsController extends Controller
{
    public function index(Request $request ) {
        $glHead = 'collection';
        $data = GeneralReport::orderBy('date','Desc')->where('gl_head', $glHead)->get();
         $members = Members::all(); 
            
        return view("templates.Reports.index",['data' => $data, 'members' => $members]);             
    }

    public function dateSearchCollection(Request $request ) {        
       $searchDate = $request->collection_report_date. ' 00:00:00';
       $reportDate = Transactions::where('date', $searchDate)->get();
        
        return view("templates.Reports.report-date",['reportDate' => $reportDate]);             
    }
/*
    public function bookSearchCollection(Request $request ) {        
       $bookNo = $request->collection_report_bookNo;
       $reportBookNo = Account::where('book_no', $bookNo)
       ->join('transaction', 'transaction.member_id', '=', 'Account.country_id')
       ->where('countries.country_name', $country)
       ->get();
      
      return view("templates.Reports.report-bookno",['reportBookNo' => $reportBookNo]);              
    }
    */
    public function nameSearchCollection(Request $request ) {       
       $searchName = $request->collection_report_member;       
       $reportName = Transactions::where('member_id', $searchName)->get();
       $members = Members::all();
        return view("templates.Reports.report-name",['reportName' => $reportName, 'members' => $members]);             
    }

    public function salaryReport(Request $request ) {
        $glHead = 'salary';
        $data = GeneralReport::orderBy('date','Desc')->where('gl_head', $glHead)->get(); 
            
        return view("templates.Reports.salary",['data' => $data]);             
    }
    public function statementReport(Request $request ) {
        $collection = 'collection';
        $collections = GeneralReport::orderBy('date','Desc')->where('gl_head', $collection)->get(); 
        $miscIncomes = 'misc_income';
        $miscIncomes = GeneralReport::orderBy('date','Desc')->where('gl_head', $miscIncomes)->get(); 
        $salary = 'salary';
        $paidSalary = GeneralReport::orderBy('date','Desc')->where('gl_head', $salary)->get(); 
            
        return view("templates.Reports.statement",['collections' => $collections, 'miscIncomes' => $miscIncomes, 'paidSalary' => $paidSalary]);             
    }
}
