@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Recycling Center</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('centre-recyclage.update', $centreRecyclage->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $centreRecyclage->name) }}" />
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address', $centreRecyclage->address) }}" />
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" value="{{ old('city', $centreRecyclage->city) }}" />
                            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Material Type</label>
                            <input type="text" name="material_type" class="form-control" value="{{ old('material_type', $centreRecyclage->material_type) }}" />
                            @error('material_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Capacity</label>
                            <input type="number" name="capacity" class="form-control" value="{{ old('capacity', $centreRecyclage->capacity) }}" />
                            @error('capacity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Number of Employees</label>
                            <input type="number" name="number_of_employees" class="form-control" value="{{ old('number_of_employees', $centreRecyclage->number_of_employees) }}" />
                            @error('number_of_employees') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Contact Number</label>
                            <input type="text" name="contact_number" class="form-control" value="{{ old('contact_number', $centreRecyclage->contact_number) }}" />
                            @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $centreRecyclage->email) }}" />
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Website</label>
                            <input type="url" name="website" class="form-control" value="{{ old('website', $centreRecyclage->website) }}" />
                            @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" style="border-radius: 15px;">Save</button>
                            <a href="{{ url('centre-recyclage') }}" class="btn btn-secondary ms-2" style="border-radius: 15px;">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
