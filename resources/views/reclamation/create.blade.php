@extends('Layouts.frontend')

@section('content')
<section id="create-reclamation">
    <div class="container">
        <div class="section-title text-center">
            <h2>Create a Complaint</h2> <!-- Titre en anglais -->
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reclamation.store', ['centreId' => $centreId]) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label> <!-- Objet en anglais -->
                <input type="text" class="form-control" name="subject" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label> <!-- Description en anglais -->
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> <!-- Bouton en anglais -->
        </form>
    </div>
</section>
@endsection
