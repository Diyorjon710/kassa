@extends('layouts.admin')
@section ('main')


<div class="row justify-content-center">


    <div class="col-md-8">
        <h1 class="h3 mb-4 text-gray-800">Mahsulot qo'shish sahifasi</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('admin.product.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nomi" class="form-label">Nomi</label>
                <input type="text" class="form-control" name="nomi" id="nomi" value="{{ old('nomi') }}">
            </div>
            <div class="mb-3">
                <label for="narxi" class="form-label">Narxi</label>
                <input type="text" class="form-control" name="narxi" id="narxi" value="{{ old('narxi') }}">
            </div>
            <div class="mb-3">
                <label for="kodi" class="form-label">Kodi</label>
                <input type="text" class="form-control" name="kodi" id="kodi" value="{{ old('kodi') }}">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Saqlash</button>
        </form>

        <a href="{{ route('admin.product.index') }}"><button type="submit" class="btn btn-success pr-3">Orqaga</button></a>
    </div>
</div>


@endsection