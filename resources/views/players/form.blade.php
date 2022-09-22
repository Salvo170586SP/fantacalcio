<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome</label>
    <input type="text" name="name" value="{{ old('name', isset($player) ? $player->name : '') }}" class="form-control"
        id="exampleFormControlInput1">
</div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Cognome</label>
    <input name="surname" type="text" value="{{ old('surname', isset($player) ? $player->surname : '') }}"
        class="form-control" id="exampleFormControlTextarea1">
</div>
@error('surname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Immagine</label>
    <input name="image" type="file"  value="{{ old('image', isset($player) ? $player->image : '') }}"
        class="form-control" id="exampleFormControlTextarea1">
</div>
@error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Età</label>
    <input name="birthday" type="date" value="{{ old('birthday', isset($player) ? $player->birthday : '') }}"
        class="form-control" id="exampleFormControlTextarea1">
</div>
@error('birthday')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<select class="form-select my-2" aria-label="Default select example" name="team_id">
    @foreach ($teams as $team)
        {{-- <option value="{{ old('team_id', isset($player) ? $player->team_id : '') }}" @selected(isset($player) ? $player->team_id == $team->id : '')>
            {{ $team->name }}</option> --}}
            <option
                @if (isset($player)) value="{{ old('team_id', $team->id) }}" 
                @selected($player->team_id == $team->id)
                @else
                value="{{ $team->id }}" @endif>
                {{ $team->name }}
            </option>
    @endforeach
</select>
@error('team')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Nazionalità</label>
    <input name="country" type="text" value="{{ old('country', isset($player) ? $player->country : '') }}"
        class="form-control" id="exampleFormControlTextarea1">
</div>
@error('country')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<select class="form-select my-2" aria-label="Default select example" name="role_id">
    @foreach ($roles as $role)
        {{-- <option value="{{ old('role_id', isset($player) ? $player->role_id : '') }}" @selected(isset($player) ? $player->role_id == $role->id : '')>
            {{ $role->role }}</option> --}}
            <option
                @if (isset($player)) value="{{ old('role_id', $role->id) }}" 
                @selected($player->role_id == $role->id)
                @else
                value="{{ $role->id }}" @endif>
                {{ $role->role }}
            </option>
    @endforeach
</select>
@error('role')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
