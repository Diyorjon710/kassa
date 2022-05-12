@extends('layouts.admin')

@section ('main')

<div class="row justify-content-center">
    <div class="col-md-10">
        <h1 class="h3 mb-4 text-gray-800">Mahsulot haqida ma'lumot</h1>

        <table class="table table-bordered">
            <tr>
                <td>Mahsulot nomi</td>
                <td>{{$p->nomi}}</td>
            </tr>
            <tr>
                <td>Mahsulot narxi</td>
                <td>{{$p->narxi}}</td>
            </tr>
            <tr>
                <td>Mahsulot kodi</td>
                <td>{{$p->kodi}}</td>
            </tr>
        </table>

        <a href="{{ route('admin.product.index') }}"><button type="button" class="btn btn-success">Orqaga</button></a>



    </div>
</div>



@endsection