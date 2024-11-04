@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create Planning
                    <a href="{{ url('planning') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('planning.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="dateCollecte">Date of Collect</label>
                            <input type="date" name="dateCollecte" id="dateCollecte" class="form-control" required />
                            @error('dateCollecte') 
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="heureDebut">Start time :</label>
                            <input type="time" name="heureDebut" id="heureDebut" class="form-control" required />
                            @error('heureDebut') 
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="remarques">Remarks</label>
                            <textarea name="remarques" id="remarques" class="form-control" rows="3"></textarea>
                            @error('remarques') 
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                        <div>
                        <label for="equipements">Sélectionner des équipements :</label><br>
                            @foreach($equipements as $equipement)
                                <input type="checkbox" name="equipements[]" value="{{ $equipement->id }}">
                                {{ $equipement->name }}<br>
                            @endforeach
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
