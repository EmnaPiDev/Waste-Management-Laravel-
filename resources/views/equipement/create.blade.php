@extends('Layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Equipement 
                        <a href="{{ url('equipement') }}" class="btn btn-danger float-end">Back</a>

                        
                        </h4>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('equipement.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name="name" class="form-control"/>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Validity</label>
                                <input type="text" name="validity" class="form-control"/>
                                @error('validity') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-3">
                                <label>Disponibility</label>
                                <br>
                                <input type="checkbox" name="disponibility" checked style="width:30px;height:30px;" /> checked=available, unchecked=not available
                            </div>
                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="text" name="quantity" class="form-control"/>
                                @error('quantity') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" accept="image/*">
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