@extends('layouts.app')
@section('title', 'Liste Etudiants')
@section('content')

<div class="container mt-5">
<table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom étudiant(e)</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @forelse ($etudiants as $etudiant)
                  <tr>
                    <th scope="row">{{ $etudiant->etudiant_id }}</th>
                    <td>{{ $etudiant->nom }}</td>
                    @foreach($villes as $ville)
                    @if( $etudiant->ville_id == $ville->id_ville)
                    <td>{{ $ville->nom }}</td>
                    @endif
                    @endforeach
                    <td>
                        <a class="btn  btn-success" href="{{ route('etudiant.show', $etudiant->etudiant_id) }}" role="button">Visionner</a>
                    </td>
                  </tr>
                  @empty
            <div class="alert alert-danger">There are no tasks to display!</div>
        @endforelse
                </tbody>
              </table>
              {{ $etudiants }}
</div>   
@endsection