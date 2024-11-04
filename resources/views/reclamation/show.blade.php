@extends('Layouts.frontend')

@section('content')
<div class="container">
    <h1>Complaint Details</h1> <!-- Titre en anglais -->

    <div class="card">
        <div class="card-header">
            <h5>ID: {{ $reclamation->id }}</h5>
        </div>
        <div class="card-body">
            <h5>Subject: {{ $reclamation->subject }}</h5> <!-- Objet en anglais -->
            <p>Description: {{ $reclamation->description }}</p> <!-- Description en anglais -->
            <p>Creation Date: {{ $reclamation->created_at->format('d/m/Y') }}</p> <!-- Date de création en anglais -->
            <a href="{{ route('reclamation.index', $centre->id) }}" class="btn btn-secondary">Back to List</a> <!-- Bouton en anglais -->
        </div>
    </div>
</div>
@endsection
