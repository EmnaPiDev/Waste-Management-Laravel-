@extends('Layouts.frontend')

@section('title', 'Modifier une Campagne')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card shadow-lg p-4" style="width: 28rem;">
        <div class="card-body">
            <!-- Titre de la carte -->
            <h1 class="text-center card-title text-success font-weight-bold">Update campaign</h1>

            <!-- Affichage des erreurs de validation -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('campagnes.update', $campagne->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mt-4">
                    <label for="titre">Campaign title</label>
                    <input type="text" name="titre" id="titre" value="{{ old('titre', $campagne->titre) }}" class="form-control">
                    @if ($errors->has('titre'))
                        <span class="text-danger">{{ $errors->first('titre') }}</span>
                    @endif
                </div>

                <div class="form-group mt-3">
                    <label for="date_debut">Start date</label>
                    <input type="date" name="date_debut" id="date_debut" value="{{ old('date_debut', $campagne->date_debut) }}" class="form-control">
                    @if ($errors->has('date_debut'))
                        <span class="text-danger">{{ $errors->first('date_debut') }}</span>
                    @endif
                </div>

                <div class="form-group mt-3">
                    <label for="date_fin">End date</label>
                    <input type="date" name="date_fin" id="date_fin" value="{{ old('date_fin', $campagne->date_fin) }}" class="form-control">
                    @if ($errors->has('date_fin'))
                        <span class="text-danger">{{ $errors->first('date_fin') }}</span>
                    @endif
                </div>

                <!-- Bouton Retour et Mettre à jour -->
                <div class="d-flex justify-content-between mt-4">
                    <!-- Bouton Retour -->
                    <a href="{{ route('campagnes.index') }}" class="btn custom-back-btn">Back</a>

                    <!-- Bouton Mettre à jour -->
                    <button type="submit" class="btn custom-btn">Update Campaign</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Styles personnalisés -->
<style>
    /* Card centré avec ombre douce */
    .card {
        border-radius: 10px;
        background-color: #f8f9fa; /* Fond léger */
    }

    /* Titre stylé en vert et gras */
    .card-title {
        font-size: 40px;
        color: #228B22; /* Vert foncé */
        font-weight: bold;
    }

    /* Bouton noir avec hover vert */
    .custom-btn {
        background-color: #333; /* Noir */
        color: #fff; /* Texte en blanc */
        padding: 15px 15px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #228B22; /* Vert foncé au hover */
        color: #fff;
    }

    /* Bouton Retour stylisé */
    .custom-back-btn {
        background-color: #555; /* Gris foncé */
        color: #fff;
        padding: 10px 5px;
        border: none;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .custom-back-btn:hover {
        background-color: #888; /* Gris plus clair au survol */
        color: #fff;
    }

    /* Alignement des éléments */
    .form-group label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
    }
</style>
@endsection
