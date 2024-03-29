<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahsulot extends Model
{
    use HasFactory;

    protected $table = 'mahsulot';

    function order_details()
    {
        return $this->hasMany(Order_details::class);
    }
}
