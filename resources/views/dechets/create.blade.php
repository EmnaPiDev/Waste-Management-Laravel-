@extends('Layouts.frontend')

@section('content')
    <div class="container">
        <h1>Ajouter un nouveau déchet</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dechets.store') }}" method="POST">
            @csrf

            <!-- Champ 'type' -->
            <div class="mb-3">
                <label for="type" class="form-label">Type de déchet</label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" value="{{ old('type') }}" required>
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Champ 'description' -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Champ 'zone_collecte_id' -->
            <div class="mb-3">
                <label for="zone_collecte_id" class="form-label">Zone de collecte</label>
                <select name="zone_collecte_id" id="zone_collecte_id" class="form-control @error('zone_collecte_id') is-invalid @enderror" required>
                    <option value="" disabled selected>Choisissez une zone de collecte</option>
                    @foreach($zoneCollectes as $zoneCollecte)
                        <option value="{{ $zoneCollecte->id }}" {{ old('zone_collecte_id') == $zoneCollecte->id ? 'selected' : '' }}>
                            {{ $zoneCollecte->nom }} - {{ $zoneCollecte->code_postal }}
                        </option>
                    @endforeach
                </select>
                @error('zone_collecte_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('dechets.index') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
@endsection
