@extends('Layouts.frontend')

@section('content')
<section id="services-section" class="services-table">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Our Recycling Centers</h2>
            <a href="{{ url('centre-recyclage/create') }}" class="thm-btn">Add a Recycling Center</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Material Type</th>
                        <th>Capacity</th>
                        <th>Number of Employees</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($centres->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">No recycling centers available.</td>
                        </tr>
                    @else
                        @foreach ($centres as $centre)
                        <tr>
                            <td>{{ $centre->name }}</td>
                            <td>{{ $centre->address }}</td>
                            <td>{{ $centre->material_type }}</td>
                            <td>{{ $centre->capacity }}</td>
                            <td>{{ $centre->number_of_employees }}</td>
                            <td>
                                <a href="{{ route('centre-recyclage.show', $centre->id) }}" class="btn btn-info btn-sm" aria-label="View center {{ $centre->name }}">View</a>
                                <a href="{{ route('centre-recyclage.edit', $centre->id) }}" class="btn btn-success btn-sm" aria-label="Edit center {{ $centre->name }}">Edit</a>
                                <a href="{{ route('reclamation.index', $centre->id) }}" class="btn btn-warning btn-sm">Gérer les Réclamations</a>

                                <form action="{{ route('centre-recyclage.destroy', $centre->id) }}" method="POST" class="d-inline" aria-label="Delete center {{ $centre->name }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this center?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $centres->links() }} <!-- Pagination if necessary -->
        </div>
    </div>
</section>
@endsection
