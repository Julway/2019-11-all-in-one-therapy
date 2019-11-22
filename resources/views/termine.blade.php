@extends('base')
@section('title', 'Termine')
@section('top-links')
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/leistungen') }}">Leistungen</a>
        <a href="{{ url('/aboutUs?ID=us') }}">Über uns</a>
        <a href="{{ url('/') }}">Kontakt</a>
    @auth
        <a href="{{ url('/patients') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth
@stop
@section('main')
    <section>
        <article class="" id="termine">
            <h1>Termine</h1>
            <p>Sie können bei unserer Assistentin Clara während der Sekretariatsöffnungszeiten einen Termin vereinbaren.</p>
            <ul>
                <hr><p>Zum Termin bitte folgendes mitnehmen:</p>
                <li>Bequeme Kleidung</li>
                <li>Bewilligte Verordnung</li>
                <li>Befunde (Röntgen, MRT, Arztbrief) falls vorhanden</li>
                <li>Handtuch</li>
                <hr><p>Unsere Sekretariatsöffnungszeiten sind:</p>
                <li>Montag - Freitag 8:00 - 11:00</li>
                <li>+43 / 123 123 123 123</li>
                <li>office@example.com</li>
                <hr><p>Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen Sie verlässlich so bald wie möglich zurück.</p>
                 </ul>
        </article>
    </section>

@stop
