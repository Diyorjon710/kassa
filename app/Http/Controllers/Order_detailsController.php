<?php

namespace App\Http\Controllers;

use App\Models\Mahsulot;
use App\Models\Order;
use App\Models\Order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Order_detailsController extends Controller
{
    public function getData(Request $request)
    {


        $user_id =  Auth::user()->id;
        $id = $request->id;
        $narxi = $request->pro_narxi;
        $soni = $request->pro_soni;
        $jami = $request->jami;
        $ordering_id = $request->ordering_id;

        $m = new Order_details();
        $m->mahsulot_id = $id;
        //$m->buyurtma_id =  1; //$rest_int;
        $m->mahsulot_narxi = $narxi;
        $m->mahsulot_soni = $soni;
        $m->buyurtmachi_id = $user_id;
        $m->jami = $jami;
        $m->order_id = $ordering_id;
        $m->save();
    }
}
