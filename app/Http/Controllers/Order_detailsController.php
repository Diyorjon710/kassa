<?php

namespace App\Http\Controllers;

use App\Models\Mahsulot;
use App\Models\Order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Order_detailsController extends Controller
{
    public function getData(Request $request)
    {
        $name =  Auth::user()->id;
        $nomi = $request->pro_nomi;
        $narxi = $request->pro_narxi;
        $soni = $request->pro_soni;
        $jami = $request->jami;
        $rest_int = $request->buyurtma_soni;

        $s = Mahsulot::all();
        $s = Mahsulot::query();
        $s = $s->where('nomi', $nomi)->get();





        $m = new Order_details();
        foreach ($s as $ss) {
            $m->mahsulot_id = $ss->id;
        }
        $m->buyurtma_id = $rest_int;
        $m->mahsulot_narxi = $rest_int;
        $m->mahsulot_soni = $soni;
        $m->buyurtmachi_id = $name;
        $m->jami = $jami;

        $query = $m->save();

        if ($query) {
            return response()->json(['code' => 1, 'msg' => 'New Order']);
        }
    }
}
