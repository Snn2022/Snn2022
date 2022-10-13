<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralReport;


class ReportsController extends Controller
{
    public function index(Request $request ) {
            $data = GeneralReport::all();  
        return view("templates.Reports.index",['data' => $data]);
             
    }
}
