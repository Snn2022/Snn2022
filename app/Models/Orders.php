<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTotalAttribute()
    {
        return $this->product_rate*$this->product_qty;
    }
}
