@extends('home')

@section('title', 'crea squadra')

@section('content')

<div class="row">
    <div class="col-12 my-3">
        <h2>Aggiungi nuova squadra</h2>
    </div>
    <div class="col-12">
        <form action="{{ route('teams.store') }}" method="POST">
        @csrf
       @include('teams.form')

        <button type="submit" class="btn btn-primary">Aggiungi</button>
        <a class="btn btn-primary" href="{{ route('teams.index') }}">Torna alle squadre</a>

    </form>
    </div>
</div>
    

@endsection
