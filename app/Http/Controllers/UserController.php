<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $requests) {
        $data = User::where('id', '!=', 1)->get();
        return view("templates.Users.index", ['data'=>$data]);
    }
    public function getProfile(Request $requests) {
        $data = User::where('id', '!=', 1)->get();
        return view("templates.Users.profile", ['data'=>$data]);
    }
}
