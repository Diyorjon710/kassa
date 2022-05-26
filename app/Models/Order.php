<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_details;

class Order extends Model
{
    use HasFactory;

    protected $table = 'ordering';

    function order_details()
    {
        return $this->hasMany(Order_details::class);
    }
}
