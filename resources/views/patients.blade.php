@extends('base')
@section('title')Patienten &ndash;
    @parent
    @stop
@section('top-links')
    @auth
        <a href="{{ url('/patients') }}">Patient</a>
        <a href="{{ url('/') }}">Kalender</a>
        <a href="{{ url('/') }}">Doku</a>
        <a href="{{ url('/backend') }}">BackEnd</a>
    @endauth
    <a href="{{ url('/') }}">Über uns</a>
    <a href="{{ url('/') }}">Leistungen</a>
    <a href="{{ url('/') }}">Termine</a>
    <a href="{{ url('/') }}">Kontakt</a>
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
            <table class="table table-dark table-hover">
                    <tr>
                        <td>{!! $patients->appends(\Request::except('page'))->render() !!}</td>
                    </tr>
                <thead>
                    <tr style="background-color: #0C9A9A; color:dimgrey;">
                        <th  class="" >@sortablelink('svnr')</th>
                        <th  class="" >@sortablelink('firstname')</th>
                        <th  class="" >@sortablelink('lastname')</th>
                        <th  class="" >@sortablelink('address')</th>
                        <th  class="" >@sortablelink('plz')</th>
                        <th  class="" >@sortablelink('city')</th>
                        <th  class="" >@sortablelink('country')</th>
                    </tr>
                </thead>

                <tbody>
                    @if($patients->count())
                        @foreach($patients as $patient)
                            <tr>
                                <td>{{ $patient->svnr }}</td>
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
        </form>
    </div>
@endsection
