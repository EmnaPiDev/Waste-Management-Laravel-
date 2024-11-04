@extends('Layouts.frontend')

@section('content')
    <div class="container">
        <h1>Détails de la Zone de Collecte</h1>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Nom: {{ $zoneCollecte->nom }}</h5>
                <p class="card-text">Code Postal: {{ $zoneCollecte->code_postal }}</p>
                <p class="card-text">Localisation: {{ $zoneCollecte->localisation }}</p>
                <a href="{{ route('dechets.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
@endsection
