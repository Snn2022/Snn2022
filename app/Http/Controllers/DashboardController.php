<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Account;
use App\Models\Transactions;
use App\Models\GeneralReport;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request ) {
        $today = Carbon::today();
        $glHead = 'collection';
        $data = GeneralReport::where('date',$today)
        ->where('gl_head', $glHead)->get();
                     
        return view("dashboard",['data' => $data]);             
    }
}
