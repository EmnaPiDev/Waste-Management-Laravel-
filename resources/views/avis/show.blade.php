@extends('Layouts.frontend')

@section('content')
<!-- Bouton Retour en haut à gauche -->
<div class="d-flex justify-content-start mt-5">
    <a href="{{ route('campagnes.avis.index', $avis->campagne->id) }}" class="btn btn-secondary">Back</a>
</div>

<div class="d-flex justify-content-center mt-3">
    <div class="card shadow-lg p-4" style="width: 28rem;">
        <div class="card-body">
            <h1 class="text-center card-title text-success font-weight-bold">Details opinion</h1>

            <p><strong>Author:</strong> {{ $avis->auteur }}</p>
            <p><strong>Containing:</strong> {{ $avis->contenu }}</p>
        </div>
    </div>
</div>

<!-- Styles personnalisés -->
<style>
    /* Style de la card */
    .card {
        border-radius: 10px;
        background-color: #f8f9fa;
        border: none;
    }

    /* Titre en vert foncé et gras */
    .card-title {
        font-size: 40px;
        color: #228B22;
        font-weight: bold;
    }

    /* Style du texte */
    p {
        font-size: 16px;
        color: #333;
    }
</style>
@endsection
