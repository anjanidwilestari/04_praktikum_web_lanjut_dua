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

    @foreach ($newss as $news)
        <article>
            <h2> <a href="/newss/{{ $news->id }}"> {{ $news->tittle }}</a></h2>
            <p>{{ $news->body }}</p>
        </article>

        
    @endforeach
    <div class="fourth-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>TELUSURI BERITAMU HARI INI!</h2>
                    <p>Telusuri berita faktual dan up to date hanya di Educastudio Modify</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <p>By Kelompok 2 Anjani - Bella</p>
</div>
@endsection