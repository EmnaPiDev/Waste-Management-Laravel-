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
