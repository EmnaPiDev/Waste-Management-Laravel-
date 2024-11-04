@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-3">Modifier l'Événement de Collecte</h4>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('collecte-evenements.update', $collecteEvenement->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ $collecteEvenement->titre }}" required>
                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <input type="text" class="form-control" id="statut" name="statut" value="{{ $collecteEvenement->statut }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="date_collecte" class="form-label">Date de Collecte</label>
                            <input type="date" class="form-control" id="date_collecte" name="date_collecte" value="{{ $collecteEvenement->date_collecte }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="lieu" class="form-label">Lieu</label>
                            <input type="text" class="form-control" id="lieu" name="lieu" value="{{ $collecteEvenement->lieu }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $collecteEvenement->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success" style="border-radius: 15px;">Mettre à Jour</button>
                        <a href="{{ route('collecte-evenements.index') }}" class="btn btn-secondary ms-2" style="border-radius: 15px;">Retour à la liste</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
