@extends('Layouts.list')

@section('content')
<div class="container">
    <h1>Create new Report</h1>

    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="rapportForm" action="{{ route('rapports.store') }}" method="POST" novalidate>
        @csrf
        
        <div class="mb-3">
            <label for="titre" class="form-label">Title  </label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" required minlength="3">
            <div class="invalid-feedback">The title is required and must be at least 3 characters long.</div>
    
        </div>

        
        <div class="mb-3">
        <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="4" required minlength="10">{{ old('contenu') }}</textarea>
            <div class="invalid-feedback">The content is required and must be at least 10 characters long.</div>
        </div>

        
        <div class="mb-3">
            <label for="date_rapport" class="form-label">Date du rapport</label>
            <input type="date" class="form-control" id="date_rapport" name="date_rapport" value="{{ old('date_rapport') }}" required>
            <div class="invalid-feedback">Please enter a valid date.</div>
        </div>

        
        <div class="mb-3">
            <label for="collecte_evenement_id" class="form-label">Collection Event</label>
            <select name="collecte_evenement_id" id="collecte_evenement_id" class="form-control" required>
                <option value="">Select an event</option>
                @foreach ($collecteEvenements as $event)
                    <option value="{{ $event->id }}" {{ old('collecte_evenement_id') == $event->id ? 'selected' : '' }}>
                        {{ $event->titre }}
                    </option>
                @endforeach
            </select>
            <div class="invalid-feedback">Select an event</div>
        </div>

        
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('rapports.index') }}" class="btn btn-secondary">Back to the list</a>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('rapportForm');
        const fields = form.querySelectorAll('input, textarea, select');

        
        fields.forEach(field => {
            field.addEventListener('blur', validateField);
            field.addEventListener('input', validateField);
        });

        
        function validateField(event) {
            const field = event.target;
            if (!field.checkValidity()) {
                field.classList.add('is-invalid');
            } else {
                field.classList.remove('is-invalid');
                field.classList.add('is-valid');
            }
        }

        
        form.addEventListener('submit', function (event) {
            let formValid = true;
            fields.forEach(field => {
                validateField({ target: field });
                if (!field.checkValidity()) {
                    formValid = false;
                }
            });

            
            if (!formValid) {
                event.preventDefault();
                event.stopPropagation();
            }
        });
    });
</script>
@endsection