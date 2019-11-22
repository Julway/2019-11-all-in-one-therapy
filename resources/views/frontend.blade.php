@extends('base')
@section('title', 'Welcome AIOT')
@section('top-links')
        <a href="{{ url('/aboutUs?ID=us') }}">Über uns</a>
        <a href="{{ url('/leistungen') }}">Leistungen</a>
        <a href="{{ url('/termine') }}">Termine</a>
        <a href="{{ url('/kontakt') }}">Kontakt</a>
    @auth
        <a href="{{ url('/patients') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth
@stop
@section('front')
    <h1>Willkomen in unserer Praxisgemeinschaft!</h1>
    <div class="container1">
        <div class="card">
            <img src="{{ asset('/images/woman-in-black-scoop-neck-shirt-smiling-38554.jpg') }}" alt="Anna Fink" title="">
            <div class="card__head">
                <a href="{{ url('/aboutUs?ID=anna') }}"><strong>Anna Fink</strong></a></div>
        </div>
        <div class="card">
            <img src="{{ asset('/images/woman-wearing-white-shirt-1181690.jpg') }}" alt="Barbara Berg" title="">
            <div class="card__head">
                <a href="{{ url('/aboutUs?ID=barbara') }}"><strong>Barbara Berg</strong></a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('/images/woman-exercising-bear-body-of-water-1300526.jpg') }}" alt="Leistungen" title="">
            <div class="card__head"><a href="{{ url('/leistungen') }}"><strong>Leistungen</strong></a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('/images/blue-and-silver-stetoscope-40568.jpg') }}" alt="Termine" title="">
            <div class="card__head"><a href="{{ url('/termine') }}"><strong>Termine</strong></a></div>
        </div>
        <div class="card">
            <img src="{{ asset('/images/care-clinic-cure-doctor-371941.jpg') }}" alt="Kontakt" title="Kontakt">
            <div class="card__head"><a href="{{ url('/kontakt') }}"><strong>Kontakt</strong></a></div>
        </div>
    </div>
@stop
