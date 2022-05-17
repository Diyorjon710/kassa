@extends('layouts.app')
@section ('content')
<a href="{{route('booked')}}">
    <button type="button" class="btn btn-primary btn-lg">New booked <span style="font-size: 30px;"> +</span> </button>
</a>

<div class="row">
    @foreach ($order as $item)

    <div class="col-md-4" style="margin: 5px 0  5px 0; padding: 10px;">
        <div class="card text-center">
            <div class="card-header">
                {{$item->buyurtma_soni}}
            </div>
            <div class="card-body">

                <table class="table">
                    <tr>
                        <th>Nomi</th>
                        <th>Narxi</th>
                        <th>Soni</th>
                        <th>Buyurtmachi</th>
                        <th>Jami</th>
                    </tr>
                    <tr>
                        <td>{{ $item->mahsulot_nomi }}</td>
                        <td>{{ $item->mahsulot_narxi }}</td>
                        <td>{{ $item->mahsulot_soni }}</td>
                        <td>{{ $item->buyurtmachi }}</td>
                        <td>{{ $item->jami }}</td>
                    </tr>
                </table>

                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


    @endforeach
</div>
@endsection