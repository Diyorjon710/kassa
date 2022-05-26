<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsulot</title>
    <link rel="stylesheet" href="{{ url('v1/bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('v1/mystyle.css') }}">
    <link rel="stylesheet" href="{{ url('/v1/bs5/all.min.css')}}">



</head>

<body>



    <div class="container">
        @yield('main')
    </div>



    <script src="{{ url('v1/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('v1/bs5/js/bootstrap.bundle.min.js') }}"></script>

    @section('myjs')

    @show
</body>

</html>