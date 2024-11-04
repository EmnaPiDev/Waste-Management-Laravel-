@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Equipement List
                        <a href="{{ url('equipement/create') }}" class="btn btn-primary float-end">Add Equipement</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="col-md-6 mb-2">
                        <form id="searchForm" method="GET">
                            <input type="text" id="search" name="search" class="form-control" placeholder="Search Equipement" value="{{ request('search') }}">
                        </form>
                    </div>
                    <div id="equipment-list">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Validity</th>
                                    <th>Disponibility</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipements as $equipement)
                                <tr>
                                    <td>{{ $equipement->id }}</td>
                                    <td>{{ $equipement->name }}</td>
                                    <td>{{ $equipement->validity }}</td>
                                    <td>{{ $equipement->disponibility == 1 ? 'Available' : 'Not Available' }}</td>
                                    <td>{{ $equipement->quantity }}</td>
                                    <td>
                                        @if($equipement->image)
                                            <img src="{{ asset($equipement->image) }}" alt="{{ $equipement->name }}" style="width: 100px; height: auto;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('equipement.edit', $equipement->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('equipement.affecter', $equipement->id) }}" class="btn btn-warning">Affecter</a>
                                        <a href="{{ route('equipement.show', $equipement->id) }}" class="btn btn-info">Show</a>
                                        <form action="{{ route('equipement.destroy', $equipement->id) }}" method="POST" class="d-inline" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $equipements->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            var searchQuery = $(this).val();
            $.ajax({
                url: "{{ route('equipement.index') }}",
                method: 'GET',
                data: {
                    search: searchQuery
                },
                success: function(response) {
                    $('#equipment-list').html(response);
                },
                error: function() {
                    console.error('Error fetching search results.');
                }
            });
        });
    });
</script>

@endsection
