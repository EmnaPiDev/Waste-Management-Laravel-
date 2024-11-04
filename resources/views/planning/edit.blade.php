@extends('Layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit This Planning
                        <a href="{{ url('planning') }}" class="btn btn-danger float-end">Back</a>

                        
                        </h4>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('planning.update' , $planning->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Date Of Collect :</label>
                                <input type="text" name="dateCollecte" class="form-control" value="{{ $planning->dateCollecte }}"/>
                                @error('dateCollecte') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Start Hour :</label>
                                <input type="text" name="heureDebut" class="form-control"value="{{ $planning->heureDebut }}"/>
                                @error('heureDebut') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-3">
                                <label>Remarks :</label>
                                <input type="text" name="remarques" class="form-control"value="{{ $planning->remarques}}"/>
                            </div>
                            <div class="form-group">
                                <label for="equipements">Choisir des équipements :</label>
                                <select name="equipements[]" id="equipements" class="form-control" multiple>
                                    @foreach($equipements as $equipement)
                                        <option value="{{ $equipement->id }}" 
                                            {{ $planning->equipements->contains($equipement->id) ? 'selected' : '' }}>
                                            {{ $equipement->name }}
                                        </option>
                                    @endforeach
                                </select>
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