@extends('layouts.front')

@section('content')

    <div class="inn-banner">
        <div class="container">
            <div class="row">
                <h4>Contact Us</h4>
                <p>Hubungi kami menggunakan salah satu media berikut.</p>
                <p> </p>
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inn-body-section">
        <div class="container">
            <div class="row">
                <div class="page-head">
                    <h2>Contact Us</h2>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                    </div>
                    <p>Hubungi kami untuk pertanyaan dan bantuan terkait Tepang dan sistem kami.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 new-con">
                    <h2> Tepang <span>Booking</span></h2>
                    <p>Aplikasi web ini menyediakan Info, Peringkat, dan Foto Cafe kami. Jadikan Reservasi Cafe Anda murah.</p>
                    <p>Layanan pemesanan cafe dengan peringkat teratas.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{ asset("front/images/icon/20.png") }}" alt="">
                    <h4>Address</h4>
                    <p>{{ config('app.address') }}</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{ asset("front/images/icon/22.png") }}" alt="">
                    <h4>CONTACT INFO:</h4>
                    <p> <a href="tel://0099999999" class="contact-icon">Phone: {{ config('app.phone_number') }}</a>
                        <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: {{ config('app.email') }}</a> </p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{ asset("front/images/icon/21.png") }}" alt="">
                    <h4>Website</h4>
                    <p> <a href="{{ config('app.website') }}">Website: {{ config('app.website') }}</a>
                        <br> <a href="{{ config('app.facebook') }}">Facebook: {{ config('app.facebook') }}</a>
                        <br> <a href="{{ config('app.twitter') }}">Twitter: {{ config('app.twitter') }}</a> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="contact-map">
            <iframe src="http://maps.google.com/maps?z=16&t=m&q=loc:{{ config('app.latitude') }}+{{ config('app.longitude') }}&amp;output=embed" allowfullscreen></iframe>
        </div>
    </div>
@endsection
