@extends('home')

@section('title', 'Modifica')

@section('content')
    <div class="col-12 my-3">
        <h1>Modifica Giocatore</h1>
    </div>
    <div class="col-12">
        <form action="{{ route('players.update', $player->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('players.form')

            <button type="submit" class="btn btn-primary">Invio</button>
            <a class="btn btn-primary" href="{{ route('players.index') }}">Torna ali giocatori</a>
        </form>
    </div>
@endsection
