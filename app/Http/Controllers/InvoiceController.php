<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request ) {
        $data = $request->all();
        return $data;
    }
}
