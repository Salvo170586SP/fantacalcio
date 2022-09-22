@extends('home')

@section('title', 'Players')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Ruoli</h2>
    </div>
</div>
<div class="col-md-12 my-3">
    <table class="table  shadow">
        <thead>
            <tr>
                <th scope="col">Ruoli</th>
                <th scope="col">--</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($roles as $role)
            <tr>
                <td>{{ $role->role }}</td>
            </tr>                           
            @empty
                <td>Non ci sono ruoli</td>
            @endforelse
        </tbody>
    </table>
</div>



@endsection