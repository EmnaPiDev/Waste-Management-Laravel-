@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-3">Détails de l'Événement de Collecte</h4>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Titre : {{ $collecteEvenement->titre }}</h5>
                    <p class="card-text"><strong>Statut :</strong> {{ $collecteEvenement->statut }}</p>
                    <p class="card-text"><strong>Date de Collecte :</strong> {{ $collecteEvenement->date_collecte }}</p>
                    <p class="card-text"><strong>Lieu :</strong> {{ $collecteEvenement->lieu }}</p>
                    <p class="card-text"><strong>Description :</strong> {{ $collecteEvenement->description }}</p>

                    <a href="{{ route('collecte-evenements.edit', $collecteEvenement->id) }}" class="btn btn-success" style="border-radius: 15px;">Modifier</a>
                    <a href="{{ route('collecte-evenements.index') }}" class="btn btn-secondary ms-2" style="border-radius: 15px;">Retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
