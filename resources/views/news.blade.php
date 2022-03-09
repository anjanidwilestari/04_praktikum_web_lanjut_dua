@extends('layouts.app')

@section('tittle')
    {{ $title }}
@endsection

@section('content')
    <div class="page-h promotion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3> NEWS </h3>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mb-5">{{ news["title"] }}</h1>
    <p>{{ $post["body"] }}</p>
@endsection

@section('footer')
    <p>By Kelompok 2 Anjani - Bella</p>
</div>
@endsection