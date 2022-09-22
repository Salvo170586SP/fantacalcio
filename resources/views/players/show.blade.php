@extends('home')

@section('title', 'Dettaglio Giocatore')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Dettaglio Giocatore</h2>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title mb-4">{{ $player->name }} {{ $player->surname }}</h5>
              <p class="card-text">Squadra: {{ isset($player->team->name) ? $player->team->name : '' }}</p>
              <p class="card-text">Nazionalità: {{ $player->country }}</p>
              <p class="card-text">Ruolo: {{ isset($player->role->role) ? $player->role->role : '' }}</p>
              <p class="card-text">Data di Nascita: {{ $player->birthday }}</p>
            </div>
          </div>
    </div>
</div>
@endsection