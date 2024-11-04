@extends('Layouts.frontend')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <div class="card">
                <div class="card-header">
    <h4 class="mb-3">Collecte Event List</h4> 
    <a href="{{ route('collecte-evenements.create') }}" class="btn btn-success" style="border-radius: 15px;">Add Event  </a>
    <a href="{{ route('rapports.index') }}" class="btn btn-success" style="border-radius: 15px;">Liste reports</a>
</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Title </th>
                                    <th>Statut</th>
                                    <th>Date  Collecte</th>
                                    <th>Description</th>
                                    <th>Place</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collecte_evenements as $collecteEvenement)
                                <tr>
                                   <td>{{ $collecteEvenement->titre }}</td>
                                    <td>{{ $collecteEvenement->statut }}</td>
                                    <td>{{ $collecteEvenement->date_collecte }}</td>
                                    <td>{{ $collecteEvenement->description }}</td>
                                    <td>{{ $collecteEvenement->lieu }}</td>
                                    <td>
                                        <a href="{{ route('collecte-evenements.edit', $collecteEvenement->id) }}" class="btn btn-success">Update</a>
                                        <a href="{{ route('collecte-evenements.show', $collecteEvenement->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('rapports.create') }}" class="btn btn-info">Generate report</a>
                                        <form action="{{ route('collecte-evenements.destroy', $collecteEvenement->id) }}" method="POST" class="d-inline">
                                            @csrf 
                                            @method('DELETE')  
                                            <button type="submit" class="btn btn-danger">Delete</button>    
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $collecte_evenements->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection