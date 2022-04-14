@extends('layouts.operator')
@section ('main')
<a href="{{route('booked')}}">
    <button type="button" class="btn btn-primary btn-lg">New booked <span style="font-size: 30px;"> +</span> </button>
</a>
@endsection