@extends('base')
@section('title', 'Über uns')
@section('top-links')
        <a href="{{ url('/') }}">Home</a>
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
@section('main')
    <section>
        @if( $_GET["ID"]=='anna'|| $_GET["ID"]=='us')
        <article class="float-left" id="anna" style="background-position:center 10%;background-image: url({{asset('/images/woman-in-black-scoop-neck-shirt-smiling-38554.jpg')}} )!important">
            <h1>Anna Fink</h1>
            <p>Als Physiotherapeutin ist mir die ganzheitliche Arbeit mit dem Patienten wichtig. Die Osteopathie biete ich ebenfalls an - sie ergänzt die Behandlung optimal. Barbara und ich arbeiten schon lange zusammen und wir freuen uns, auch Sie in unserer Praxis begrüßen zu dürfen.</p>
            <ul>
                <hr><p>Ausbildungen:</p>
                <li>2016: FDM Modul 1 + 2</li>
                <li>Seit 2012: Osteopathie an der Wiener Schule für Osteopathie</li>
                <li>2010-2012: Sportphysiotherapie</li>
                <li>2007-2010: Akademie für Physiotherapie am Wilhelminenspital</li>
                <hr><p>Berufliche Aktivitäten:</p>
                <li>Seit 2019: Praxisgemeinschaft mit Barbara</li>
                <li>Seit 2011: SPORTO-Praxisgemeinschaft</li>
                <li>2010-2011: Elements of Performance-Sportphysiotherapie Hagenstadt</li>
                <li>2008-2009: Orthopädisches Zentrum Otto Meier Krankenhaus</li>
                <hr><p>Sportphysiotherapeutische Aktivitäten:</p>
                <li>2011: Austria Wien Junioren U13 und U14</li>
                <li>2010: Fussball Damen U18, Herren FCZ Bern, Balletttänzerinnen Opernhaus Bern, BZ Adelbrie Europacup Niederlande</li>
                <li>2009: AON-N-Volleys</li>
                <hr><p>Therapeutische Erfahrung mit Sportarten:</p>
                <li>Laufen, Fussball, Volleyball, Ballett, Ausdruckstanz, Boden- und Geräteturnen</li>
                <hr><p>Hobbies:</p>
                <li>Reisen, Bodenturnen, Tanzen, Laufen, Freunde, Musik, Schlagzeug spielen</li>
            </ul>
        </article>
        @endif
            @if( $_GET["ID"]=='barbara'||  $_GET["ID"]=='us')
        <article class="float-left" id="barbara" style="background-position:center 19%;background-image: url({{asset('/images/woman-wearing-white-shirt-1181690.jpg')}} )!important">
            <h1>Barbara Berg</h1>
            <p>Ich kenne Anna schon seit der Schulzeit und wir haben Teile unserer Ausbildungen gemeinsam gemacht. Gemeinsam möchten wir unseren Patientinnen und Patienten stets das Allerbeste bieten und das gelingt uns jeden tag aufs Neue.</p>
            <ul>
                <hr><p>Ausbildungen:</p>
                <li>2012 –  2014: Yoga Ausbildung in Tirol</li>
                <li>2012: Budo-Teacher-Training in Graz</li>
                <li>2011: Yoga Master-Training in Nepal</li>
                <li>2010: Yoga & Spiralakrobatik Foundation Level</li>
                <li>2002 – 2008: Wiener Schule für Osteopathie</li>
                <li>1997 – 2000: Akademie für Physiotherapie SFB</li>
                <hr><p>Berufliche Aktivitäten:</p>
                <li>Seit 2019: Praxisgemeinschaft mit Anna</li>
                <li>2010 – 2018: Sport-ORTOPABST-Praxisgemeinschaft</li>
                <li>2006 – 2010: GOLDO Praxisgemeinschaft</li>
                <li>2005 – 2006: Health & More We do it for you Consult AG</li>
                <li>2004 – 2005: Sanatorium Helga</li>
                <li>2000 – 2004: Physikalisches Institut Voltenberg</li>
            </ul>
        </article>
                @endif
    </section>

@stop
