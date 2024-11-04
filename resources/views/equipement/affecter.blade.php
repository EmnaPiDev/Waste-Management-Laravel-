<!-- resources/views/equipement/affecter.blade.php -->

@extends('Layouts.frontend')

@section('content')
<div class="container">
    <h2>Affecter l'équipement : {{ $equipement->name }}</h2>

    <form action="{{ route('equipement.storeAffectation', $equipement->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="planning_id">Choisir un planning :</label>
            <select name="planning_id" id="planning_id" class="form-control" required>
                <option value="">Sélectionner un planning</option>
                @foreach($planningsFuturs as $planning)
                    <option value="{{ $planning->id }}">
                        {{ $planning->dateCollecte }} à {{ $planning->heureDebut }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Affecter</button>
        <a href="{{ route('equipement.index') }}" class="btn btn-secondary mt-3">Annuler</a>
    </form>
</div>
@endsection
