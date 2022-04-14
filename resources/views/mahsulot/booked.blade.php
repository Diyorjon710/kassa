@extends('layouts.operator')

@section ('main')
<div class="row">
    <div class="col-6">
        <div class="card text-center card">
            <h2 class="card-title   ">Tanlangan mahsulot</h5>
                <div class="card-body">
                    <div class="row">

                        <p>Mahsulotni o'rni: <span id="index"></span></p>
                        <p>Soni: <span id="code"></span></p>

                        <button type="button" id="order" onclick="Order()" class="btn btn-primary">Qo'shish</button>

                    </div>

                </div>
                <span id="error"></span>

        </div>
    </div>
    <div class="col-6">
        <div class="card text-center order" id="order_table">
            <h2 class="card-title   ">Tanlangan mahsulot</h5>
                <div class="card-body">
                    <div class="row">

                        <p>Mahsulotni o'rni: <span id="index"></span></p>
                        <p>Soni: <span id="code"></span></p>

                        <button type="button" class="btn btn-primary">Qo'shish</button>


                    </div>
                </div>

        </div>
    </div>

</div>




<div class="row">
    <div class="col-8">

        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
        <div id="search_list"></div>
    </div>
    <div class="col-4 numpad ">

        <div class="btn-group-vertical ml-4 mt-4 d-flex" role="group" aria-label="Basic example">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '1';">1</button>
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '2';">2</button>
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '3';">3</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '5';">5</button>
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '4';">4</button>
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '6';">6</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '7';">7</button>
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '8';">8</button>
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '9';">9</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent.slice(0, -1);">&lt;</button>
                <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '0';">0</button>

            </div>
        </div>
    </div>
</div>
@endsection


@section('myjs')
<script>
    function Order() {
        let soni = document.getElementById('code').innerText;
        let id = document.getElementById("index").innerText;
        let span = document.getElementById("error");
        if (soni == "" || id == "") {
            span.innerHTML = "Enter the information";
            span.style = "color: red";
        } else {
            span.innerHTML = "";
            document.getElementById("order_table").style = "opacity: 1";
        }


    }

    function getIndex(x) {
        document.getElementById('index').textContent = x;
    }

    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var query = $(this).val();
            console.log(query);
            $.ajax({
                url: "search",
                type: "GET",
                data: {
                    'search': query
                },
                success: function(data) {
                    $('#search_list').html(data);
                }
            });
        });
    });
</script>
@endsection