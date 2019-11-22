@extends('base')
@section('title', 'Termine')
@section('top-links')
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/termine') }}">Termine</a>
        <a href="{{ url('/aboutUs?ID=us') }}">Über uns</a>
        <a href="{{ url('/kontakt') }}">Kontakt</a>
    @auth
        <a href="{{ url('/patients') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth

@stop
@section('main')
    <section>
        <article class="" id="leistungen">
            <h1>Leistungen</h1>
             <ul>
                <hr><p>Preise und Verrechnung:</p>
                <li>Physiotherapie 45 min 	75 €</li>
                <li>Osteopathie    45 min   90 €</li>
                <li>Kinesiotape Stk.     15-25 €</li>
                <p>Wir sind umsatzsteuerbefreit gem. § 19 UStg.</p>
                <hr><p>Sollten Sie Ihren vereinbarten Termin nicht 24 Stunden vorher absagen (Telefon, Email), wird Ihnen dieser in Rechnung gestellt.</p>
                <hr><p>Kostenrückerstattung:</p>
                <li>Für eine Rückerstattung der Therapiekosten bei Ihrer Krankenkasse benötigen Sie eine Verordnung für Physiotherapie von Ihrem Haus- oder Facharzt. Diese muss chefärztlich von Ihrer Krankenkasse bewilligt werden (übernehmen wir auch gerne für Sie).</li>
                <li>Nach Therapieabschluss erhalten Sie eine Rechnung, die Sie gemeinsam mit der bewilligten Verordnung bei Ihrer Krankenkasse einreichen.</li>
                <li>Sie bekommen einen Teil Ihrer Kosten (unterschiedlicher Teil je nach Kasse) von Ihrer Krankenkasse rückerstattet. Verbleibende Restkosten können von Ihrer Zusatzversicherung übernommen werden.</li>
             </ul>
        </article>
    </section>

@stop
