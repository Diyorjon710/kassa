@extends('layouts.app')

@section ('content')

<div class="container-fluid me-3">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-primary mt-1 mb-2">
        <div class="container-md">
            <a class="navbar-brand" href="#">Kassa</a>
        </div>
    </nav>
    <div class="row my-3">
        <div class="col-6">
            <div class="card text-center">
                <div class="card-header">
                    <h2>Tanlangan mahsulot</h2>
                </div>
                <div class="card-body body">

                    <p>Mahsulotni nomi: <b><span id="nomi"></span></b></p>
                    <p>Narxi: <b><span id="narx"></span></b></p>
                    <p>Soni: <b><span id="code"></span></b></p>
                    <div style="display: none" id="index"></div>


                    <button type="button" id="order" onclick="Order()" class="btn btn-primary">Qo'shish</button>

                </div>

            </div>
            <span id="error"></span>
        </div>


        <div class="col-6">
            <div class="card text-center order" id="order_table" style=" opacity: 0;">
                <div class="card-header">
                    <h2>Hisoblagich</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div style="height: 120px; overflow:auto;">
                            <table border="1" class="table table-hover table-fixed" id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Nomi</th>
                                        <th>Narxi</th>
                                        <th>Soni</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">

                                </tbody>

                            </table>
                            <div style="font-weight: bold;">Jami: <div style=" font-weight: bold;" id="jami">0</div>
                            </div>

                        </div>

                    </div>


                    <button type="button" id="buyurtma" class="btn btn-primary">Buyurtma</button>
                </div>

            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-8">

            <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
            <div style="overflow-y:auto; height:300px" id="search_list"></div>
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
                    <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '.';"> . </button>
                    <button type="button" class="btn btn-outline-primary py-5" onclick="document.getElementById('code').textContent=document.getElementById('code').textContent + '0';">0</button>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection


@section('myjs')
<script>
    var div = document.getElementById("jami");
    let nomi1 = [];

    function Order() {
        //const tr = document.getElementById('nomi');
        const tbody = document.getElementById('tbody');
        let rowCount = $("#table tr").length;
        let index = document.getElementById('index').textContent = rowCount;
        let tr = document.createElement('tr');
        let narxi = document.getElementById('narx').innerText;
        let soni = document.getElementById('code').innerText;
        let nomi = document.getElementById("nomi").innerText;
        let span = document.getElementById("error");
        let q_narxi = narxi * soni;


        var jami = parseInt(div.textContent);


        let id = [];
        let narxi1 = [];
        let soni1 = [];


        if (soni == "" || nomi == "") {
            span.innerHTML = "Enter the information";
            span.style = "color: red";
        } else {
            jami += parseInt(q_narxi);
            div.textContent = jami;


            span.innerHTML = "";
            document.getElementById("order_table").style = "opacity: 1";
            sessionStorage.setItem('index', index);
            sessionStorage.setItem('soni', soni);
            sessionStorage.setItem('nomi', nomi);
            sessionStorage.setItem('narxi', q_narxi);




            for (let i = 0; i < sessionStorage.length; i++) {
                var key = sessionStorage.key(i);
                let td = document.createElement('td');
                tbody.appendChild(tr);
                td.textContent = sessionStorage.getItem(key);
                tr.appendChild(td);
                id.push(td.textContent);
            }
        }
    }


    function getIndex(x, y, z) {

        document.getElementById('nomi').textContent = x;
        document.getElementById('narx').textContent = y;
        nomi1.push(z);
    }

    $('#buyurtma').click(function() {
        $('#table tr').each(function(row, tr) {

            if ($(tr).find('td:eq(0)').text() == "") {

            } else {
                $.get("target", function(data) {
                    var x = data;
                    x++;
                    $.ajax({
                        url: 'order',
                        type: "get",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            id: $(tr).find('td:eq(0)').text(),
                            pro_nomi: $(tr).find('td:eq(1)').text(),
                            pro_narxi: $(tr).find('td:eq(2)').text(),
                            pro_soni: $(tr).find('td:eq(3)').text(),
                            jami: div.textContent,
                            buyurtma_soni: x
                        },
                        success: function(response) { // What to do if we succeed
                            console.log('Bazaga saqlandi');
                        },
                        error: function(response) {
                            alert('Error' + response);
                        }
                    });
                });


            }

        });

    });









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