@extends('Layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit This Equipement 
                        <a href="{{ url('equipement') }}" class="btn btn-danger float-end">Back</a>

                        
                        </h4>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('equipement.update' , $equipement->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{ $equipement->name }}"/>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Validity</label>
                                <input type="text" name="validity" class="form-control"value="{{ $equipement->validity }}"/>
                                @error('validity') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-3">
                                <label>Disponibility</label>
                                <br>
                                <input type="checkbox" name="disponibility" {{ $equipement->disponibility ==1 ? 'checked':'' }} style="width:30px;height:30px;" /> checked=available, unchecked=not available
                            </div>
                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="text" name="quantity" class="form-control"value="{{ $equipement->quantity }}"/>
                                @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror

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