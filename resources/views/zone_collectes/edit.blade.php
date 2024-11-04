@extends('Layouts.frontend')

@section('content')
    <div class="container">
        <h1>Modifier la Zone de Collecte</h1>

        {{-- Affichage des erreurs de validation --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('zone-collectes.update', $zoneCollecte->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" value="{{ old('nom', $zoneCollecte->nom) }}" required>
                @error('nom')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="code_postal">Code Postal</label>
                <input type="number" name="code_postal" class="form-control @error('code_postal') is-invalid @enderror" id="code_postal" value="{{ old('code_postal', $zoneCollecte->code_postal) }}" required>
                @error('code_postal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="localisation">Localisation</label>
                <input type="text" name="localisation" class="form-control @error('localisation') is-invalid @enderror" id="localisation" value="{{ old('localisation', $zoneCollecte->localisation) }}" required>
                @error('localisation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
        </form>
    </div>
@endsection
