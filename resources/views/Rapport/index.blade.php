@extends('layouts.list')

@section('content')

<div class="container">
    <h4 class="mb-3">Liste des rapports</h4> 

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ route('rapports.create') }}" class="btn btn-success mb-3">Créer un nouveau rapport</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date du rapport</th>
                        <th>Événement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rapports as $rapport)
                        <tr>
                            <td>{{ $rapport->titre }}</td>
                            <td>{{ $rapport->date_rapport }}</td>
                            <td>
                                @if ($rapport->collecteEvenement)
                                    {{ $rapport->collecteEvenement->titre }}
                                @else
                                    <span class="text-muted">Aucun événement associé</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('rapports.show', $rapport->id) }}" class="btn btn-info">Afficher</a>
                                <a href="{{ route('rapports.edit', $rapport->id) }}" class="btn btn-warning">Mettre à jour</a>
                                <form action="{{ route('rapports.destroy', $rapport->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  

@endsection
