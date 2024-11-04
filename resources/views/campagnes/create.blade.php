@extends('Layouts.frontend')

@section('title', 'Créer une Campagne')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 text-success font-weight-bold">Create new campaign</h1>

    <!-- Affichage des erreurs de validation -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li> <!-- Affiche chaque erreur -->
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulaire stylé avec Bootstrap -->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="{{ route('campagnes.store') }}" method="POST">
                        @csrf
                        
                        <!-- Champ Titre -->
                        <div class="form-group mb-3">
                            <label for="titre" class="form-label font-weight-bold">Title :</label>
                            <input type="text" name="titre" id="titre" class="form-control" placeholder="Please enter the name of your campaign!" value="{{ old('titre') }}">
                            @if ($errors->has('titre'))
                                <span class="text-danger">{{ $errors->first('titre') }}</span>
                            @endif
                        </div>

                        <!-- Champ Date de début -->
                        <div class="form-group mb-3">
                            <label for="date_debut" class="form-label font-weight-bold">Start date :</label>
                            <input type="date" name="date_debut" id="date_debut" class="form-control" value="{{ old('date_debut') }}">
                            @if ($errors->has('date_debut'))
                                <span class="text-danger">{{ $errors->first('date_debut') }}</span>
                            @endif
                        </div>

                        <!-- Champ Date de fin -->
                        <div class="form-group mb-3">
                            <label for="date_fin" class="form-label font-weight-bold">End date :</label>
                            <input type="date" name="date_fin" id="date_fin" class="form-control" value="{{ old('date_fin') }}">
                            @if ($errors->has('date_fin'))
                                <span class="text-danger">{{ $errors->first('date_fin') }}</span>
                            @endif
                        </div>

                        <!-- Bouton Retour et Enregistrer -->
                        <div class="d-grid gap-2 d-md-flex justify-content-between">
                            <!-- Bouton Retour -->
                            <a href="{{ route('campagnes.index') }}" class="btn custom-back-btn">Back</a>

                            <!-- Bouton Enregistrer -->
                            <button type="submit" class="btn custom-btn">Save campaign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles personnalisés -->
<style>
    /* Titre stylisé en vert et gras */
    h1 {
        font-size: 40px;
        color: #228B22;
        font-weight: bold;
    }

    /* Style de la card */
    .card {
        border-radius: 10px;
        background-color: #f8f9fa;
        border: none;
    }

    /* Bouton noir avec hover vert */
    .custom-btn {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #228B22;
        color: #fff;
    }

    /* Bouton Retour stylisé */
    .custom-back-btn {
        background-color: #555;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .custom-back-btn:hover {
        background-color: #888;
        color: #fff;
    }

    /* Style des labels */
    .form-label {
        color: #333;
    }

    /* Style des champs de saisie */
    .form-control {
        border-radius: 5px;
        padding: 10px;
    }
</style>
@endsection
