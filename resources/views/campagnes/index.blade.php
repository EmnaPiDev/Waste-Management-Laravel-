@extends('Layouts.frontend')

@section('title', 'List of Awareness Campaigns')

@section('content')
<div class="container">
    <!-- Bouton Retour en haut à gauche -->
    <div class="d-flex justify-content-start mb-3">
        <a href="http://127.0.0.1:8000/#services-section" class="btn btn-secondary">Back to the services section</a>
    </div>

    <h1 class="my-4 text-center">List of awareness campaigns</h1>

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

    <!-- Bouton pour créer une nouvelle campagne -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('campagnes.create') }}" class="btn btn-success">Create a new awareness campaign</a>
    </div>

    <!-- Tableau stylé -->
    <table class="table table-hover table-bordered text-center shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campagnes as $campagne)
                <tr>
                    <td>{{ $campagne->id }}</td>
                    <td>{{ $campagne->titre }}</td>
                    <td>{{ $campagne->date_debut }}</td>
                    <td>{{ $campagne->date_fin }}</td>
                    <td>
                        <!-- Bouton pour voir les détails -->
                        <a href="{{ route('campagnes.show', $campagne->id) }}" class="btn custom-btn btn-sm">Details</a>

                        <!-- Bouton pour éditer -->
                        <a href="{{ route('campagnes.edit', $campagne->id) }}" class="btn custom-btn btn-sm">Update</a>

                        <!-- Formulaire pour supprimer une campagne -->
                        <form action="{{ route('campagnes.destroy', $campagne->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn custom-btn btn-sm">Delete</button>
                        </form>

                        <!-- Bouton pour voir les avis associés -->
                        <a href="{{ route('campagnes.avis.index', $campagne->id) }}" class="btn custom-btn btn-sm">View opinions</a>
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

    /* Ajuster les marges du titre */
    h1 {
        font-size: 45px;
        color: #333;
        font-weight: bold;
        color: #228B22;
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
