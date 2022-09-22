@extends('home')

@section('title', 'Dettaglio squadra')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Dettaglio squadra</h1>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title mb-4">{{ $team->name }}</h5>
                <p class="card-text">Città: {{ $team->city }}</p>
                <p class="card-text">Serie: {{ $team->championship }}</p>
                <p class="card-text">Presidente: {{ $team->ceo }}</p>
            </div>
        </div>
    </div>
    <div class="col-12 my-3">
        <table class="table  shadow">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Nazionalità</th>
                    <th scope="col">Ruolo</th>
                    <th scope="col">--</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($players) --}}
                @forelse ($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->surname }}</td>
                    <td>{{ $player->country }}</td>
                    <td>{{ $player->role }}</td>
                    <td><a href=""><button class="btn btn-sm btn-primary">Dettaglio giocatore</button></a></td>
                </tr>                           
                @empty
                    <td>Non ci sono giocatori</td>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
