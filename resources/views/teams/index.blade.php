@extends('home')

@section('title', 'Squadre')

@section('content')
<div class="row">
    <div class="col my-3">
        <h1>Lista delle squadre</h1>
    </div>
    <div class="col-12 my-3">
        <a  href="{{ route('teams.create') }}"><button class="btn btn-outline-primary shadow">Crea nuova squadra</button></a>
    </div>
    <div class="col-md-12">
        <table class="table  shadow">
            <thead>
                <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Nome Squadra</th>
                    <th scope="col">Città</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Presidente</th>
                    <th scope="col">--</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($teams as $team)
                <tr>
                    <td><img width="50" height="50" src="{{ $team->logo ?? '' }}" alt="logo"></td>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->city }}</td>
                    <td>{{ $team->championship }}</td>
                    <td>{{ $team->ceo }}</td>
                    <td class="d-flex">
                        <a href="{{ route('teams.show', $team) }}"><button class="btn btn-sm btn-primary">Dettagli</button></a>
                        <a href="{{ route('teams.edit',$team) }}"><button class="btn btn-sm btn-secondary mx-2">Modifica</button></a>
                       <form action="{{ route('teams.destroy', $team) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                        <button class="btn btn-sm btn-danger" type="submit">Elimina</button>
                       </form>
                    </td>
                </tr>                           
                @empty
                    <td>Non ci sono squadre</td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection