<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\BookingSource;
use App\Models\IncomeSource;
class CollectionController extends Controller
{
    
    public function index(Request $request ) {
              
        return view("templates.Collection.index");
             
    }
}
