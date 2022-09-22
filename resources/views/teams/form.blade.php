<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome squadra</label>
    <input type="text" name="name" value="{{ old('name', isset($team) ? $team->name :'') }}"  required class="form-control" id="exampleFormControlInput1" placeholder="aggiungi nome">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Città</label>
    <input name="city" type="text" class="form-control" value="{{ old('city', isset($team) ? $team->city : '') }}" required id="exampleFormControlTextarea1"
        placeholder="aggiungi città">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Serie</label>
    <input name="championship" type="text" value="{{ old('championship', isset($team) ? $team->championship : '') }}" required class="form-control" id="exampleFormControlTextarea1"
        placeholder="aggiungi serie">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Presidente</label>
    <input name="ceo" type="text" value="{{ old('ceo', isset($team) ? $team->ceo : '') }}" class="form-control" required id="exampleFormControlTextarea1"
        placeholder="aggiungi presidente">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Logo Società</label>
    <input name="logo" type="url" value="{{ old('logo', isset($team) ? $team->logo : '') }}"   class="form-control" id="exampleFormControlTextarea1"
        placeholder="aggiungi logo">
</div>
