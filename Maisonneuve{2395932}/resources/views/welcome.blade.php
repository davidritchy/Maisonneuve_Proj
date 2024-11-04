@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.69);border-radius:10px;border:1px solid white;">
<h1>Futurs etudiant(e)s / Veuillez remplir vos informations ici:</h1>
  <form class="row-3 g-3 needs-validation" style="padding: 10px;" method="/">
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip01" class="form-label">Nom</label>
      <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip02" class="form-label">Addresse</label>
      <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip02" class="form-label">Date de naissance</label>
      <input type="date" class="form-control" id="validationTooltip02" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip02" class="form-label">No de telephone</label>
      <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltipUsername" class="form-label">E-mail</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
    <div class="col-md-6 position-relative ms-5">
      <label for="validationTooltip04" class="form-label">Ville</label>
      <select class="form-select" id="validationTooltip04" required>
      @forelse ($villes as $ville)
        <option selected disabled value="">{{ $ville->nom }}</option>
        @empty
            <div class="alert alert-danger">There are no tasks to display!</div>
        @endforelse
        <!-- <option>...</option> -->
      </select>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
      <button type="submit" class="btn btn-success mt-4 btn-lg" style="margin-left: 45%">Submit form</button>
    </div>
  </form>
</div>
@endsection