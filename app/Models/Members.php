<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function account() {
        return $this->hasOne(Account::class, 'member_id');
    }
}
