@extends('layouts.app')
@section('title', 'Modification')
@section('content')
<div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.69);border-radius:10px;border:1px solid white;">
<h1>Modifiez vos informations ici:</h1>
  <form class="row-3 g-3 needs-validation"  style="padding: 10px;" method="POST">
  @csrf
  @method('PUT')
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip01" class="form-label">Nom</label>
      <input type="text" class="form-control" id="validationTooltip01" name="nom" value="{{ old('nom', $etudiant->nom) }}" required>
      @if ($errors->has('nom'))
            <div class="text-danger mt-2">
                {{$errors->first('nom')}}
            </div>
        @endif
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip02" class="form-label">Addresse</label>
      <input type="text" class="form-control" id="validationTooltip02" name="addresse" value="{{ old('addresse', $etudiant->addresse) }}" required>
      @if ($errors->has('addresse'))
            <div class="text-danger mt-2">
                {{$errors->first('addresse')}}
            </div>
        @endif
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip02" class="form-label">Date de naissance</label>
      <input type="date" class="form-control" id="validationTooltip02" name="date_naissance" value="{{ old('date_naissance', $etudiant->date_naissance) }}" required>
      @if ($errors->has('date_naissance'))
            <div class="text-danger mt-2">
                {{$errors->first('date_naissance')}}
            </div>
        @endif
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip02" class="form-label">No de telephone</label>
      <input type="text" class="form-control" id="validationTooltip02" name="telephone" value="{{ old('telephone', $etudiant->telephone) }}" required>
      @if ($errors->has('telephone'))
            <div class="text-danger mt-2">
                {{$errors->first('telephone')}}
            </div>
        @endif
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltipUsername" class="form-label">E-mail</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        <input type="email" name="email" class="form-control"  value="{{ old('email', $etudiant->email) }}" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
        @if ($errors->has('email'))
            <div class="text-danger mt-2">
                {{$errors->first('email')}}
            </div>
        @endif
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip04" class="form-label">Ville</label>
      <select class="form-select" name="ville_id"  id="validationTooltip04" required>
      @forelse ($villes as $ville)
      @if( $ville->id_ville == $etudiant->ville_id)
        <option selected   value="{{ $ville->id_ville }}">{{ $ville->nom }}</option>
        @endif
        <option  value="{{ $ville->id_ville }}">{{ $ville->nom }}</option>
        @empty
            <div class="alert alert-danger">There are no tasks to display!</div>
        @endforelse
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
      <button type="submit" class="btn btn-success mt-4 btn-lg" style="margin-left: 45%">Update</button>
    </div>
  </form>
</div>
@endsection