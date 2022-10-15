<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralReport;


class ReportsController extends Controller
{
    public function index(Request $request ) {
        $glHead = 'collection';
        $data = GeneralReport::orderBy('date','Desc')->where('gl_head', $glHead)->get(); 
            
        return view("templates.Reports.index",['data' => $data]);             
    }

    public function searchCollection(Request $request ) {
        $glHead = 'collection';
       $searchDate = $request->collection_report_date. ' 00:00:00';
       $data = GeneralReport::where('gl_head', $glHead)
       ->where('date', $searchDate)->get();            
        return view("templates.Reports.index",['data' => $data]);
             
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
