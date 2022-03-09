@extends('layouts.app')

@section('tittle')
    {{ $title }}
@endsection
@section('content')
    <div class="page-h promotion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3> DASHBOARD </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="video-featured">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-holder">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Abt1Uq2s848" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fourth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>SELAMAT DATANG, EDUCA</h2>
                    <p>Yeay, Kamu baru saja logged in!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <p>By Kelompok 2 Anjani - Bella</p>
</div>
@endsection