@extends('Layouts.frontend')

@section('content')
<div class="container">
    <h1>Edit Complaint</h1> <!-- Titre en anglais -->

    <form action="{{ route('reclamation.update', [$centre->id, $reclamation->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="subject">Subject</label> <!-- Objet en anglais -->
            <input type="text" name="subject" class="form-control" id="subject" value="{{ old('subject', $reclamation->subject) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label> <!-- Description en anglais -->
            <textarea name="description" class="form-control" id="description" rows="4" required>{{ old('description', $reclamation->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button> <!-- Bouton en anglais -->
    </form>

    <a href="{{ route('reclamation.index', $centre->id) }}" class="btn btn-secondary">Back</a> <!-- Bouton de retour en anglais -->
</div>
@endsection
