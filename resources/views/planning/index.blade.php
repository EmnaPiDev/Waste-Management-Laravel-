
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
                    <h4> Planning List
                    <a href="{{ url('planning/create') }}" class="btn btn-primary float-end">Add Planning</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date De Collecte</th>
                                <th>Heure De Debut</th>
                                <th>Notes</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plannings as $planning)
                            <tr>
                                <td>{{ $planning->id }}</td>
                                <td>{{ $planning->dateCollecte }}</td>
                                <td>{{ $planning->heureDebut }}</td>
                                <td>{{ $planning->remarques }}</td>
                                <td>
                                    <a href="{{ route('planning.edit', $planning->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('planning.show', $planning->id) }}" class="btn btn-info">Show</a>
                                    <form action="{{ route('planning.destroy', $planning->id) }}" method="POST" class="d-inline">
                                        @csrf 
                                        @method('DELETE')  
                                        <button type="submit" class="btn btn-danger">Delete</button>    
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $plannings->links() }}
                </div>
                 <!-- Ajouter la section du calendrier ici -->
                 <div class="card mt-4">
                 <div id="calendar"></div>
                </div>

            </div>
        </div>
    </div>

   

            </div>

        </div>
    </div>
</div>

@endsection