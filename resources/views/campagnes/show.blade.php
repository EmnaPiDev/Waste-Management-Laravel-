@extends('Layouts.frontend')

@section('content')
    <!-- Bouton Retour en haut à gauche -->
    <div class="d-flex justify-content-start mt-5">
        <a href="{{ route('campagnes.index') }}" class="btn custom-back-btn">Back</a>
    </div>

    <!-- Affichage des erreurs de validation globales -->
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="d-flex justify-content-center mt-3">
        <div class="card text-center shadow" style="width: 28rem;">
            <div class="card-body">
                <h1 class="card-title">{{ $campagne->titre }}</h1>
                <p class="card-text"><strong>Start date :</strong> {{ $campagne->date_debut }}</p>
                <p class="card-text"><strong>End date :</strong> {{ $campagne->date_fin }}</p>
                
                <div class="d-flex justify-content-around mt-4">
                    <a href="{{ route('campagnes.edit', $campagne->id) }}" class="btn btn-sm custom-btn">Update</a>

                    <!-- Formulaire pour supprimer la campagne -->
                    <form action="{{ route('campagnes.destroy', $campagne->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm custom-btn">Delete</button>
                    </form>

                    <a href="{{ route('campagnes.avis.index', $campagne->id) }}" class="btn btn-sm custom-btn">View opinion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles personnalisés -->
    <style>
        .custom-btn {
            background-color: #333; /* Un fond gris foncé */
            color: #fff; /* Texte en blanc */
            padding: 8px 16px; /* Taille plus petite */
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-btn:hover {
            background-color: #228B22; /* Vert foncé pour l'effet hover */
        }

        .custom-back-btn {
            background-color: #555; /* Gris foncé pour le bouton retour */
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .custom-back-btn:hover {
            background-color: #888; /* Gris plus clair pour l'effet hover */
        }

        .card {
            border: none; /* Supprimer la bordure de la card */
            border-radius: 10px; /* Coins légèrement arrondis */
            padding: 20px;
            background-color: #f8f9fa; /* Un fond léger et propre */
        }

        .card-title {
            font-size: 40px; /* Augmenter la taille du titre */
            font-weight: bold;
            color: #228B22; /* Couleur verte pour le titre */
        }

        .card-text {
            font-size: 18px;
            color: #666;
        }

        .shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre douce pour un effet moderne */
        }

        /* Espacement entre les boutons */
        .d-flex .btn {
            margin: 0 5px;
        }
    </style>
@endsection
