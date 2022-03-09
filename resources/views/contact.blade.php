@extends('layouts.app')

@section('tittle')
    {{ $title }}
@endsection



@section('content')
    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="map-holder">
                        <div id="map_canvas" class="map-canvas" style="height: 360px;"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <form action="/contact" method="post">
                            <fieldset class="col-md-6">
                                <input type="text" name="name" placeholder="Name...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="email" name="email" placeholder="Email...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" name="subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12">
                                <textarea name="message" id="message" rows="5" placeholder="Message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12">
                                <button class="main-button">Send Message</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <p>By Kelompok 2 Anjani - Bella</p>
</div>
@endsection