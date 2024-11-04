@extends('Layouts.frontend')

@section('content')
    <div class="container">
        <h1>Déchet Détails</h1>
        <p><strong>ID: </strong>{{ $dechet->id }}</p>
        <p><strong>Type: </strong>{{ $dechet->type }}</p>
        <p><strong>Description: </strong>{{ $dechet->description }}</p>

        <a href="{{ route('dechets.index') }}" class="btn btn-secondary">Retour à la liste</a>
        <a href="{{ route('dechets.edit', $dechet->id) }}" class="btn btn-warning">Éditer</a>

        <form action="{{ route('dechets.destroy', $dechet->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr?')">Supprimer</button>
        </form>
    </div>
@endsection
