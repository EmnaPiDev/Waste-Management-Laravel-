@extends('Layouts.frontend')

@section('content')
<div class="container mt-5">
    <!-- Bouton Retour en haut à gauche -->
    <div class="d-flex justify-content-start mb-3">
        <a href="{{ route('campagnes.index') }}" class="btn btn-secondary">Back to list of campaigns</a>
    </div>

    <h1 class="text-center text-success font-weight-bold">Opinions : {{ $campagne->titre }}</h1>

    <!-- Affichage des erreurs de validation globales -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Bouton pour créer un nouvel avis -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('campagnes.avis.create', $campagne->id) }}" class="btn btn-success">Create Opinion</a>
    </div>

    <!-- Tableau des avis -->
    <table class="table table-hover table-bordered text-center shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Containing</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($avis as $avi)
                <tr>
                    <td>{{ $avi->id }}</td>
                    <td>{{ $avi->auteur }}</td>
                    <td>{{ $avi->contenu }}</td>
                    <td>
                        <!-- Bouton pour voir les détails -->
                        <a href="{{ route('campagnes.avis.show', [$campagne->id, $avi->id]) }}" class="btn custom-btn btn-sm">Details</a>

                        <!-- Bouton pour éditer -->
                        <a href="{{ route('campagnes.avis.edit', [$campagne->id, $avi->id]) }}" class="btn custom-btn btn-sm">Update</a>

                        <!-- Formulaire pour supprimer un avis -->
                        <form action="{{ route('campagnes.avis.destroy', [$campagne->id, $avi->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn custom-btn btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Styles personnalisés -->
<style>
    /* Table stylée */
    .table {
        border-radius: 8px;
        overflow: hidden;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    /* Ombre douce pour le tableau */
    .shadow-sm {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Espacement entre les boutons */
    .table td .btn {
        margin: 2px;
    }

    /* Style des boutons */
    .custom-btn {
        background-color: #333; /* Couleur noire par défaut */
        color: #fff;
        border: none;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #228B22; /* Vert foncé au survol */
        color: #fff;
    }

    .custom-btn:focus {
        box-shadow: none; /* Supprimer l'effet focus Bootstrap */
    }

    /* Centrer le texte dans le tableau */
    .table th, .table td {
        text-align: center;
        font-size: 14px;
    }

    /* Ajuster les marges et styles du titre */
    h1 {
        font-size: 45px; /* Taille de police augmentée */
        font-weight: bold; /* Texte en gras */
        color: #228B22; /* Vert foncé */
    }

    /* Bouton principal en haut à droite */
    .btn-success {
        background-color: #228B22;
        border: none;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #1e7b1e;
    }
</style>
@endsection
