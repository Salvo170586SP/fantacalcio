@extends('home')

{{-- @section('title')
    <h2>Players</h2>
@endsection --}}


@section('title', 'Players')

@section('content')
    <div class="row">
        <div class="col-12 m-4">
            <h1>Lista dei giocatori</h1>
        </div>
        <div class="col-12 d-flex align-items-center justify-content-between my-2">
            <div>
                @foreach ($roles as $role)
                    <a class="my-2" href="{{ route('players.getRole', $role->id) }}">
                        <button class="btn btn-sm btn-primary me-2">{{ $role->role }}</button>
                    </a>
                @endforeach
            </div>

            <a href="{{ route('players.index') }}"><button class="btn btn-sm btn-secondary">Torna a tutti</button></a>
        </div>
        <hr>
        <div class="col-12 my-3">
            <a href="{{ url('players/create') }}"><button class="btn btn-outline-primary shadow">Crea nuovo</button></a>
        </div>
        <div class="col-md-12">
            <table class="table  shadow">
                <thead>
                    <tr>
                        <th scope="col">Immagine</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Squadra</th>
                        <th scope="col">Data di Nascita</th>
                        <th scope="col">Ruolo</th>
                        <th scope="col">Nazionalità</th>
                        <th scope="col">--</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($players as $player)
                        <tr>
                            <td><img width="150" class="rounded" src="{{ asset('storage') . '/' . $player->path_image }}" alt=""></td>
                            <td>{{ $player->name }}</td>
                            <td>{{ $player->surname }}</td>
                            <td>{{ isset($player->team->name) ? $player->team->name : '' }}</td>
                            <td>{{ $player->birthday }}</td>
                            <td>{{ isset($player->role->role) ? $player->role->role : '' }}</td>
                            <td>{{ $player->country }}</td>
                            <td class="d-flex">
                                <a href="{{ url('/players/player', $player->id) }}"><button
                                        class="btn btn-sm shadow btn-primary">Dettaglio</button></a>
                                <a href="{{ url('/players/edit', $player->id) }}"><button
                                        class="btn btn-sm shadow btn-secondary mx-2">Modifica</button></a>

                                <form action="{{ route('players.destroy', $player) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm shadow btn-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td>Non ci sono player</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
