<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    //
    public function createRoom(Request $request) {
        $data = $request->all();        
        Room::create($data);
        session()->flash('success','Room-type created successfully..!!');
        return redirect()->back(); 

    }
}
