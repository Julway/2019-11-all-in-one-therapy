@extends('base')
@section('title', 'Welcome in Backend')
@section('top-links')
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/termine') }}">Termine</a>
        <a href="{{ url('/aboutUs?ID=us') }}">Über uns</a>
        <a href="{{ url('/kontakt') }}">Kontakt</a>
        <a href="{{ url('/leistungen') }}">Leistungen</a>
    @auth
        <a href="{{ url('/patients') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/') }}">FrontEnd</a>
    @endauth
@endsection
@section('main')
    <h1>Welcome to Backend</h1>
@stop
