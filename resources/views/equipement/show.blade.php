@extends('Layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Equipement Details
                        <a href="{{ url('equipement') }}" class="btn btn-danger float-end">Back</a>

                        
                        </h4>
                    </div>
                    <div class="card-body">
                     
                            <div class="mb-3">
                                <label>name : </label>
                                <p>{{ $equipement->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label>Validity : </label>
                                <p>{{ $equipement->validity }}</p>


                            </div>
                            <div class="mb-3">
                                <label>Disponibility : </label>
                                <br>
                                <p>{{ $equipement->disponibility ==1 ? 'checked':''}}</p>
                            </div>
                            <div class="mb-3">
                                <label>Quantity : </label>
                                <p>{{ $equipement->quantity }}</p>


                            </div>
                            <div>
                            <h3>Plannings associés :</h3>
                                @if ($equipement->plannings->isEmpty())
                                    <p>Aucun planning associé.</p>
                                @else
                                    <ul>
                                        @foreach ($equipement->plannings as $planning)
                                            <li>{{ $planning->dateCollecte }} à {{ $planning->heureDebut }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection