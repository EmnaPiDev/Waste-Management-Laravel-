@extends('Layouts.frontend')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Liste des déchets</h1>
        <a href="{{ route('dechets.create') }}" class="btn btn-primary mb-3">Ajouter un déchet</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulaire de recherche -->
        <form method="GET" action="{{ route('dechets.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Rechercher un déchet..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
            </div>
        </form>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Zone De Collecte</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dechets as $dechet)
                    <tr>
                        <td>{{ $dechet->type }}</td>
                        <td>{{ $dechet->description }}</td>
                        <td>
                            @if($dechet->zoneCollecte)
                                {{ $dechet->zoneCollecte->nom }} - {{ $dechet->zoneCollecte->code_postal }}
                            @else
                                <span class="text-muted">Aucune zone de collecte</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('dechets.show', $dechet->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('dechets.edit', $dechet->id) }}" class="btn btn-warning btn-sm">Éditer</a>
                            <form action="{{ route('dechets.destroy', $dechet->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($dechets->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center text-muted">Aucun déchet trouvé.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Ajout de la pagination pour les déchets -->
        <div class="d-flex justify-content-center">
            {{ $dechets->links() }}
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="mt-4 mb-4">Liste des Zones de Collecte</h1>
        <a href="{{ route('zone-collectes.create') }}" class="btn btn-primary mb-3">Créer une nouvelle Zone</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif

        <!-- Formulaire de recherche pour les zones de collecte -->
        <form method="GET" action="{{ route('zone-collectes.index') }}" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Rechercher une zone..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
            </div>
        </form>

        <table class="table table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Code Postal</th>
                    <th>Localisation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($zoneCollectes as $zoneCollecte)
                    <tr>
                        <td>{{ $zoneCollecte->id }}</td>
                        <td>{{ $zoneCollecte->nom }}</td>
                        <td>{{ $zoneCollecte->code_postal }}</td>
                        <td>{{ $zoneCollecte->localisation }}</td>
                        <td>
                            <a href="{{ route('zone-collectes.show', $zoneCollecte->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('zone-collectes.edit', $zoneCollecte->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('zone-collectes.destroy', $zoneCollecte->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($zoneCollectes->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center text-muted">Aucune zone de collecte trouvée.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <!-- Ajout de la pagination pour les zones de collecte -->
        <div class="d-flex justify-content-center">
            {{ $zoneCollectes->links() }}
        </div>
    </div>
@endsection
