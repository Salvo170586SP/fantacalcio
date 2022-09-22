@extends('home')

@section('title', 'modifica squadra')

@section('content')

<div class="row">
    <div class="col-12 my-3">
        <h2>Modifica squadra</h2>
    </div>
    <div class="col-12">
        <form action="{{ route('teams.update', $team->id) }}" method="POST">
        @method('PUT')
        @csrf
        @include('teams.form')

        <button type="submit" class="btn btn-primary">Invia</button>
        <a class="btn btn-primary" href="{{ route('teams.index') }}">Torna alle squadre</a>
    </form>
    </div>
</div>
@endsection