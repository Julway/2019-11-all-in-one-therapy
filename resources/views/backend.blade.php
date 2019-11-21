@extends('base')
@section('title', 'Welcome in Backend')
@section('top-links')
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
