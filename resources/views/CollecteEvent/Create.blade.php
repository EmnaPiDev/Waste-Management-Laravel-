
@extends('Layouts.frontend')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-3">Add  new event</h4>

            <!-- Affichage du message de succès -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form id="collecteForm" action="{{ route('collecte-evenements.store') }}" method="POST" novalidate>
                        @csrf 

                        <!-- Titre -->
                        <div class="mb-3">
                            <label for="titre" class="form-label">Title</label>
                            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" required minlength="3">
                            <div class="invalid-feedback">Le titre est requis et doit contenir au moins 3 caractères.</div>
                        </div>

                        <!-- Statut -->
                        <div class="mb-3">
                            <label for="statut" class="form-label">Status</label>
                            <input type="text" class="form-control" id="statut" name="statut" value="{{ old('statut') }}" required>
                            <div class="invalid-feedback">Le statut est requis.</div>
                        </div>

                        <!-- Date de Collecte -->
                        <div class="mb-3">
                            <label for="date_collecte" class="form-label">Date  Collecte</label>
                            <input type="date" class="form-control" id="date_collecte" name="date_collecte" value="{{ old('date_collecte') }}" required>
                            <div class="invalid-feedback">Veuillez entrer une date valide.</div>
                        </div>

                        <!-- Lieu -->
                        <div class="mb-3">
                            <label for="lieu" class="form-label">Place</label>
                            <input type="text" class="form-control" id="lieu" name="lieu" value="{{ old('lieu') }}" required>
                            <div class="invalid-feedback">Le lieu est requis.</div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required minlength="10">{{ old('description') }}</textarea>
                            <div class="invalid-feedback">La description est requise et doit contenir au moins 10 caractères.</div>
                        </div>

                        <!-- Boutons -->
                        <button type="submit" class="btn btn-success" style="border-radius: 15px;">Add event</button>
                        <a href="{{ route('collecte-evenements.index') }}" class="btn btn-secondary ms-2" style="border-radius: 15px;">Return</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('collecteForm');
        const fields = form.querySelectorAll('input, textarea');

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
            fields.forEach(field => {
                validateField({target: field});
            });

            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
        });
    });
</script>

@endsection