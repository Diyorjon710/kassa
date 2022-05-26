@extends('layouts.admin')

@section ('main')

@extends('layouts.admin')




@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif



@section ('main')
<h1 class="h3 mb-4 text-gray-800">Mahsulot sahifasi</h1>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- @yield('main') -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-grid gap-2 d-md-block">
                <a href="{{route('admin.product.create')}}"><button class="btn btn-success" type="button">Mahsulot qo'shish</button></a>

            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_1" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">№</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Nomi</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Narxi</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Kodi</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1">Edit</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>№</th>
                                        <th>Nomi</th>
                                        <th>Narxi</th>
                                        <th>Kodi</th>
                                        <th>Edit</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($products as $p)
                                    <tr>
                                        <td>{{ ($products->currentpage()-1)*$products->perpage() + ($loop->index+1) }}</td>
                                        <td><a href="{{ route('admin.product.show' , [$p->id])}}">{{ $p->nomi }}</a></td>
                                        <td>{{ $p->narxi }}</td>
                                        <td>{{ $p->kodi }}</td>
                                        <td>
                                            <a href="{{route('admin.product.edit', [$p->id])}}" class="btn btn-primary"><i class="fas fa-1x fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    {{$products->links()}}
                    <!-- <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries (filtered from 57 total entries)</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Orqaga</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">Keyingi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bosrdered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Nomi</th>
                            <th>Narxi</th>
                            <th>Kodi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>№</th>
                            <th>Nomi</th>
                            <th>Narxi</th>
                            <th>Kodi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nomi}}</td>
                            <td>{{$p->narxi}}</td>
                            <td>{{$p->kodi}}</td>
                            <td>
                                <a href="{{route('admin.product.edit', [$p->id])}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div> -->

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        @endsection

        <!-- <h1 class="h3 mb-4 text-gray-800">Admin bosh sahifasi</h1>

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
</table> -->
        @endsection