@extends('layouts.operator')



@section('main')
<div class="card">
    <div class="card-header">
        Halol supermarket
    </div>
    <div class="card-body">
        {{ $order->created_at }}
        <br>
        <b>{{$order->buyurtma_raqami}}</b>
        <table id="table">
            <tr>
                <th colspan="4">Mahsulotlar</th>
            </tr>
            @foreach($order->order_details as $od)
            <tr>
                <td style="padding: 5px 20px 5px 5px;"> nomi: {{ $od->mahsulot->nomi }}</td>
                <td style="padding: 5px 20px 5px 5px;">soni: {{ $od->mahsulot_soni }}</td>
                <td style="padding: 5px 20px 5px 5px;">narxi: {{ $od->mahsulot->narxi }}</td>
                <td style="padding: 5px 30px 5px 5px;"> = jami narxi: {{ $od->mahsulot_narxi }} </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3"><b>Jami: {{ $od->jami }} so'm</b></td>
            </tr>
        </table>
        Buyurtmachi: {{ $od->users->name }}
    </div>
    <div class="card-footer">
        <p>Haridingiz uchun rahmat !!!</p>
    </div>
</div>

@endsection

@section('myjs')
<script>
    let rowCount = $("#table tr").length;
    document.getElementById('number').innerText = rowCount;
</script>
@endsection