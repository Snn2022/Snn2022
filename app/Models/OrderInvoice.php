<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInvoice extends Model
{
    use HasFactory;

    public function orders() {
        return $this->belongsTo(Orders::class, 'order_id','order_id');
     }
     public function getTotalAttribute()
     {
         return $this->orders->product_rate*$this->orders->product_qty;
     }
}
