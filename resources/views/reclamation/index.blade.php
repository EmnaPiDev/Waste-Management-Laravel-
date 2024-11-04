@extends('Layouts.frontend')

@section('content')
<div class="container">
    <h1>Complaints for the center {{ $centre->name }}</h1>

    @if($reclamations->isEmpty())
        <div class="alert alert-warning">
            No complaints found.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                      
                        <th>Subject</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Status</th> <!-- Nouvelle colonne pour le statut -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reclamations as $reclamation)
                        <tr>
                           
                            <td>{{ $reclamation->subject }}</td>
                            <td>{{ $reclamation->description }}</td>
                            <td>{{ $reclamation->created_at->format('d/m/Y') }}</td>
                            <td>{{ ucfirst($reclamation->status) }}</td> <!-- Affiche le statut -->
                            <td>
                                <a href="{{ route('reclamation.show', [$centre->id, $reclamation->id]) }}" class="btn btn-info">View</a>
                                <a href="{{ route('reclamation.edit', [$centre->id, $reclamation->id]) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('reclamation.destroy', [$centre->id, $reclamation->id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this complaint?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <a href="{{ route('reclamation.export', ['centreId' => $centre->id]) }}" class="btn btn-primary">Exporter les réclamations</a>


    <a href="{{ route('reclamation.create', $centre->id) }}" class="btn btn-primary">Create a complaint</a>
</div>
@endsection
