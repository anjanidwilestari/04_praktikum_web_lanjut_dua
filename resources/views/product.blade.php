@extends('layouts.app')

@section('tittle')
    {{ $title }}
@endsection


@section('content')
    <div class="page-h promotion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3> OUR PRODUCT </h3>
                </div>
            </div>
        </div>
    </div>

        

    <div class="filter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="filter-controls controls">
                        <li class="filter active" data-filter="mix">All</li>
                        <li class="filter" data-filter="category-1">Belajar</li>
                        <li class="filter" data-filter="category-2">Bermain</li>
                        <li class="filter" data-filter="category-3">Responsive</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div id="Grid">
                    <section class="row justify-content-center">
                        <div class="container-center" style="margin-top:45px">
                            <table class="table table-bordered text-center">
                                <style>
                                    table,
                                    td {
                                        border: 1px solid #333;
                                        text-align:center;
                                    }
                                    
                                    thead,
                                    tbody {
                                        background-color: #222;
                                        color: #fff;
                                    }
                                    th{
                                        text-align: center;
                                    }
                                    </style>
                                <thead>
                                <tr>
                                    <th>NOMOR</th>
                                    <th>NAMA</th>
                                    <th>GAMBAR</th>
                                    <th>JENIS</th>
                                    <th>DESKRIPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td><img height="150" width="250" src="{{ $p->gambar }}" /></td>
                                    <td>{{ $p->jenis }}</td>
                                    <td>{{ $p->konten }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </section>    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <p>By Kelompok 2 Anjani - Bella</p>
</div>
@endsection