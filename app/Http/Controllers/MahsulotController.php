<?php

namespace App\Http\Controllers;

use App\Models\Mahsulot;
use Illuminate\Http\Request;

class MahsulotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Mahsulot::all();
        return view('mahsulot.index', ['list' => $list]);
    }

    public function booked()
    {
        return view('mahsulot.booked');
    }


    public function bookedajax(Request $request)
    {
        if ($request->ajax()) {
            $data = Mahsulot::where('id', 'like', '%' . $request->search . '%')
                ->orwhere('nomi', 'like', '%' . $request->search . '%')->get();

            $output = '';
            if (count($data) > 0) {

                $output = '
                <table class="table table-hover table-fixed" border=1>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nomi</th>
                <th scope="col">Narxi</th>
                <th scope="col">Kodi</th>
            </tr>
        </thead>
        <tbody>';
                $count  = 1;
                foreach ($data as $d) {
                    $output .= '
                <tr onclick = "getIndex(\'' . $d->nomi . '\',' . $d->narxi . ')">
                <td>' . $count++  . '</td>
                <td>' . $d->nomi . '</td>
                <td>' . $d->narxi . '</td>
                <td>' . $d->kodi . '</td>
                </tr>
                ';
                }


                $output .= '</tbody>
        </table>  ';
            } else {
                $output .= "<span class='empty'>No results</span>";
            }

            return $output;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function show(Mahsulot $mahsulot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahsulot $mahsulot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahsulot $mahsulot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahsulot  $mahsulot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahsulot $mahsulot)
    {
        //
    }
}
