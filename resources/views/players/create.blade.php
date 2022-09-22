@extends('home')

@section('title', 'Creazione')

@section('content')

    <div class="row">
        <div class="col-12 my-3">
            <h1>Creazione Giocatore</h1>
        </div>
        <div class="col-12">
            <form action="{{ url('/players/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('players.form')

                <button type="submit" class="btn btn-primary">invia</button>
                <a class="btn btn-primary" href="{{ route('players.index') }}">Torna ali giocatori</a>
            </form>
        </div>
    </div>
@endsection
