@extends('layouts.list')

@section('content')

<div class="container">
    <h4 class="mb-3">Détails  Report</h4> 

    <div class="card">
        <div class="card-body">
            <p><strong>Titlee :</strong> {{ $rapport->titre }}</p>
            <p><strong>Date  Report :</strong> {{ $rapport->date_rapport }}</p>
            <p><strong>Événement Collecté :</strong> {{ $rapport->collecteEvenement->titre }}</p>
            <p><strong>Content :</strong></p>
            <p>{{ $rapport->contenu }}</p>
        </div>
    </div>

    <a href="{{ route('rapports.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>

@endsection