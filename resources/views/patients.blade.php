@extends('base')
@section('title')Patienten &ndash;
    @parent
    @stop
@section('top-links')
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/aboutUs?ID=us') }}">Über uns</a>
        <a href="{{ url('/leistungen') }}">Leistungen</a>
        <a href="{{ url('/termine') }}">Termine</a>
        <a href="{{ url('/kontakt') }}">Kontakt</a>
    @auth
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth
@endsection
@section('main')
    <div class="container">
        <h2>Patientendaten</h2>
        <form action="/patients" method="POST">
            @method("GET")
            @csrf
            <div class="input-group">
                <input name="suche" type="text" class="form-control" placeholder="Suchen nach ...">
                <label>
                    <span class="input-group-btn">
                        <button name="sucheB" class="btn btn-search" type="submit">
                            <i class="fa fa-search fa-fw"></i>Suchen
                        </button>
                    </span>
                </label>
            </div>
        <div class="row table-responsive">
            <label style="margin-bottom: 0; margin-left: 425px">{!! $patients->appends(\Request::except('page'))->render() !!}</label>
            <table class="table table-dark table-hover">
                <thead>
                    <tr >
                        <th  class="text-center" >@sortablelink('svnr')</th>
                        <th  class="text-left" >@sortablelink('firstname', 'Vorname')</th>
                        <th  class="text-right" >@sortablelink('lastname','Nachname')</th>
                        <th  class="text-center" >@sortablelink('address','Adresse')</th>
                        <th  class="text-center" >@sortablelink('plz','Plz')</th>
                        <th  class="text-center" >@sortablelink('city','Ort')</th>
                        <th  class="text-center" >@sortablelink('country','Land')</th>
                    </tr>
                </thead>
                <tbody>
                    @if($patients->count())
                        @foreach($patients as $patient)
                            <tr>
                                <td><a href="{{ url('/patients?nr='.$patient->id.'') }}">{{ $patient->svnr }}</a></td>
                                <td>{{ $patient->firstname }} </td>
                                <td> {{ $patient->lastname }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->plz }}</td>
                                <td>{{ $patient->city }}</td>
                                <td>{{ $patient->country }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
            <label><button href="{{ url('/patients?nr=A') }}"class="btn btn-dark" type="submit" name="new">Neuen Patienten anlegen</button></label>
        </form>
    </div>
        @if(!empty($_GET['nr']) )
            <div class=" container">
                <form action="/patients/update" method="Post">
                    @php
                        $patient=\App\Patient::all()->where('id','==',$_GET['nr']);
                    @endphp
                    @foreach($patient as $key => $value)
                    <label>SvNr <input type="number" minlength="8" maxlength="8" placeholder="{{$value->svnr}}"></label>
                    <label>Vorname <input type="text" placeholder="{{$value->firstname}} "></label>
                    <label>Nachname <input type="text" placeholder="{{$value->lastname}} "></label>
                    <label>Adresse <input type="text" placeholder="{{$value->address}} "></label>
                    <label>PLZ <input type="text" placeholder="{{$value->plz}} "></label>
                    <label>Ort <input type="text" placeholder="{{$value->city}} "></label>
                    <label>Land <input type="text" placeholder="{{$value->country}} "></label>
                    <label>EMail <input type="text" placeholder="{{$value->email}} "></label>
                    <lable><button class="btn btn-info" type="submit" name="up">Ändern</button>
                        <button class="btn btn-danger" type="submit" name="delete">Löschen</button></lable>
                    @endforeach
                </form>
            </div>
        @endif
        </form>
    </div>
@endsection

