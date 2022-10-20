<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = [];

    function members()
    {    	
    	return $this->belongsTo(Members::class,'member_id','id');
    }
    function transaction() {
        return $this->belongsTo(Transactions::class,'member_id');
    }
}
