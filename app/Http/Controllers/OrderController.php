<?php

namespace App\Http\Controllers;

use App\Models\Mahsulot;
use App\Models\Order;
use App\Models\Order_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function myMethod()
    {
        $s = Order::count() + 1;
        $ordering = new Order();
        $ordering->buyurtma_raqami = "{$s}-buyurtma";
        $ordering->save();
        $ordering_id = $ordering->id;
        return $ordering_id;
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $name =  Auth::user()->name;
        // $nomi = $request->pro_nomi;
        // $narxi = $request->pro_narxi;
        // $soni = $request->pro_soni;
        // $jami = $request->jami;

        // $m = new Order;
        // $m->mahsulot_nomi = $nomi;
        // $m->mahsulot_narxi = $narxi;
        // $m->mahsulot_soni = $soni;
        // $m->buyurtmachi = $name;
        // $m->jami = $jami;

        // $m->save();

        // return redirect()->route('mahsulot.index')->with('message', 'Bazaga saqlandi!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
