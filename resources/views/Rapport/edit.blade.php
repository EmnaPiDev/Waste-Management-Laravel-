@extends('layouts.list')

@section('content')

<div class="container">
    <h4 class="mb-3">Update report</h4>

    <form action="{{ route('rapports.update', $rapport->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titre">Title </label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre', $rapport->titre) }}" required>
        </div>

        <div class="form-group">
            <label for="contenu">Content </label>
            <textarea name="contenu" id="contenu" class="form-control" required>{{ old('contenu', $rapport->contenu) }}</textarea>
        </div>

        <div class="form-group">
            <label for="date_rapport">Date of report</label>
            <input type="date" name="date_rapport" id="date_rapport" class="form-control" value="{{ old('date_rapport', $rapport->date_rapport) }}" required>
        </div>

        <div class="form-group">
            <label for="collecte_evenement_id">Event</label>
            <select name="collecte_evenement_id" id="collecte_evenement_id" class="form-control">
                @foreach ($collecteEvenements as $event)
                    <option value="{{ $event->id }}" {{ $rapport->collecte_evenement_id == $event->id ? 'selected' : '' }}>{{ $event->titre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update </button>
    </form>
</div>

@endsection