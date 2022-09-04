<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tshirt;

class Package extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tShirt()
{
    return $this->hasOne(Tshirt::class);
}
}