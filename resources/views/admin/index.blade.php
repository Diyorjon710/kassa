@extends('layouts.admin')

@section ('main')

<h1 class="h3 mb-4 text-gray-800">Admin bosh sahifasi</h1>

<table class="table table-hover table-bordered">
    @foreach($order_list as $order)
    <tr>
        <td>{{$order->buyurtma_raqami}}</td>
        <td>
            @foreach($order->order_details as $od)
            <li>{{$od->mahsulot->nomi}} {{$od->mahsulot_narxi}} {{$od->mahsulot_soni}}</li>
            @endforeach
        </td>
    </tr>
    @endforeach
</table>
@endsection