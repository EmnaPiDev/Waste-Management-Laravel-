@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-primary" style="font-weight: bold; font-size: 24px;">Create a Recycling Center
                        <a href="{{ url('centre-recyclage') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('centre-recyclage.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Name</label>
                            <input type="text" name="name" class="form-control" />
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Address</label>
                            <input type="text" name="address" class="form-control" />
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">City</label>
                            <input type="text" name="city" class="form-control" />
                            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Material Type</label>
                            <input type="text" name="material_type" class="form-control" />
                            @error('material_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Capacity</label>
                            <input type="number" name="capacity" class="form-control" />
                            @error('capacity') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Number of Employees</label>
                            <input type="number" name="number_of_employees" class="form-control" />
                            @error('number_of_employees') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Contact Number</label>
                            <input type="text" name="contact_number" class="form-control" />
                            @error('contact_number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Email</label>
                            <input type="email" name="email" class="form-control" />
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Website</label>
                            <input type="url" name="website" class="form-control" />
                            @error('website') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="font-weight: bold;">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
