@extends('base')
@section('title', 'Kontakt')
@section('top-links')
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/leistungen') }}">Leistungen</a>
        <a href="{{ url('/aboutUs?ID=us') }}">Über uns</a>
        <a href="{{ url('/termine') }}">Termine</a>
    @auth
        <a href="{{ url('/patients') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth
@stop
@section('main')
    <section>
        <article class="" id="kontakt">
            <h1>Kontakt</h1>

            <ul>
                <hr><p>Sie erreichen uns:</p>
                <li>Montag - Freitag 8:00 - 11:00</li>
                <li>+43 / 123 123 123 123</li>
                <li><email>office@example.com</email></li>
                <hr><p>Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen Sie verlässlich so bald wie möglich zurück.</p>
                 </ul>
        </article>
    </section>

@stop
