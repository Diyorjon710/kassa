<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function mahsulot()
    {
        return $this->belongsTo(Mahsulot::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'buyurtmachi_id');
    }
}
