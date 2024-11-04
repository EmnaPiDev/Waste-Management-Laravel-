@extends('Layouts.frontend')

@section('content')
<!-- Bouton Retour en haut à gauche -->
<div class="d-flex justify-content-start mt-5">
    <a href="{{ route('campagnes.avis.index', $campagne->id) }}" class="btn btn-secondary">Back</a>
</div>

<div class="d-flex justify-content-center mt-3">
    <div class="card shadow-lg p-4" style="width: 28rem;">
        <div class="card-body">
            <h1 class="text-center card-title text-success font-weight-bold">Update Opinion {{ $campagne->titre }}</h1>

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

            <form action="{{ route('campagnes.avis.update', [$campagne->id, $avis->id]) }}" method="POST">
                @csrf
                @method('PUT')
                
                <!-- Champ Auteur -->
                <div class="form-group mt-3">
                    <label for="auteur" class="font-weight-bold">Author :</label>
                    <input type="text" name="auteur" value="{{ old('auteur', $avis->auteur) }}" class="form-control" >
                    @if ($errors->has('auteur'))
                        <span class="text-danger">{{ $errors->first('auteur') }}</span>
                    @endif
                </div>

                <!-- Champ Contenu -->
                <div class="form-group mt-3">
                    <label for="contenu" class="font-weight-bold">Containing :</label>
                    <textarea name="contenu" class="form-control" rows="5" >{{ old('contenu', $avis->contenu) }}</textarea>
                    @if ($errors->has('contenu'))
                        <span class="text-danger">{{ $errors->first('contenu') }}</span>
                    @endif
                </div>

                <!-- Bouton Mettre à jour -->
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn custom-btn">Update</button>
                </div>
            </form>
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
        font-size: 35px;
        color: #228B22;
        font-weight: bold;
    }

    /* Bouton noir avec hover vert */
    .custom-btn {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
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

    /* Champ de saisie stylé */
    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
    }

    /* Espacement entre les champs */
    .form-group {
        margin-bottom: 1.5rem;
    }
</style>
@endsection
