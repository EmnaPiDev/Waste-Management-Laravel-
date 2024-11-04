@extends('Layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Planning Details
                        <a href="{{ url('planning') }}" class="btn btn-danger float-end">Back</a>

                        
                        </h4>
                    </div>
                    <div class="card-body">
                     
                            <div class="mb-3">
                                <label>Date of Collecte : </label>
                                <p>{{ $planning->dateCollecte }}</p>
                            </div>
                            <div class="mb-3">
                                <label>Start time : </label>
                                <p>{{ $planning->heureDebut }}</p>


                            </div>
                            
                            <div class="mb-3">
                                <label>Remarks : </label>
                                <p>{{ $planning->remarques }}</p>


                            </div>
                            <div>
                            <h4>Équipements associés :</h4>
                            @if ($planning->equipements->isEmpty())
                                <p>Aucun équipement associé à ce planning.</p>
                            @else
                                <ul>
                                    @foreach ($planning->equipements as $equipement)
                                        <li>
                                            <strong>Nom :</strong> {{ $equipement->name }} |
                                            <strong>Quantité :</strong> {{ $equipement->quantity }} |
                                            <strong>Disponibilité :</strong> {{ $equipement->disponibility ? 'Disponible' : 'Non disponible' }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            </div>
                            
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection