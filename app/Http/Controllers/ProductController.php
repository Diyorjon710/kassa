<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahsulot;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #dd(session());


        $products = Mahsulot::paginate(10);
        return view('admin.product.index', compact('products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view("admin.product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'nomi' => 'required|string|min:3',
            'narxi' => 'required|integer|min:4',
            'kodi' => 'required|integer|min:13'
        ]);
        // bazaga saqlash
        $m = new Mahsulot;
        $m->nomi = $data['nomi'];
        $m->narxi = $data['narxi'];
        $m->kodi = $data['kodi'];
        $m->save();

        return redirect()->route('admin.product.index')->with("message", 'Bazaga saqlandi');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahsulot $product)
    {
        return view('admin.product.show', ['p' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahsulot $product)
    {
        return view("admin.product.edit", ['p' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahsulot $product)
    {
        $data = $request->validate([
            'nomi' => 'required|string|min:3',
            'narxi' => 'required|integer|min:4',
            'kodi' => 'required|integer|min:13'
        ]);
        // bazaga saqlash
        $product->nomi = $data['nomi'];
        $product->narxi = $data['narxi'];
        $product->kodi = $data['kodi'];
        $product->save();

        return redirect()->route('admin.product.index')->with("message", 'Bazadan o\'zgartirildi');
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
