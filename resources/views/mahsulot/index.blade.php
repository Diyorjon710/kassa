@extends('layouts.app')
@section ('content')
<a href="{{route('booked')}}">
    <button type="button" class="btn btn-primary btn-lg">New booked <span style="font-size: 30px;"> +</span> </button>
</a>

<div class="row">
    @foreach($order_list as $order)
    <div class="col-md-4" style="margin: 5px 0  5px 0; padding: 10px;">
        <div class="card text-center">
            <div class="card-header">
                {{$order->buyurtma_raqami}}
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
                    @foreach($order->order_details as $od)
                    <tr>
                        <td>{{ $od->mahsulot->nomi }}</td>
                        <td>{{ $od->mahsulot->narxi }}</td>
                        <td>{{ $od->mahsulot_soni }}</td>
                        <td>{{ $od->buyurtmachi }}</td>
                        <td>{{ $od->jami }}</td>
                    </tr>
                    @endforeach

                </table>

                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection