@extends('Layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Recycling Center Details
                        <a href="{{ url('centre-recyclage') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label>Name: </label>
                        <p>{{ $centreRecyclage->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Address: </label>
                        <p>{{ $centreRecyclage->address }}</p>
                    </div>
                    <div class="mb-3">
                        <label>City: </label>
                        <p>{{ $centreRecyclage->city }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Material Type: </label>
                        <p>{{ $centreRecyclage->material_type }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Capacity: </label>
                        <p>{{ $centreRecyclage->capacity }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Number of Employees: </label>
                        <p>{{ $centreRecyclage->number_of_employees }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Contact Number: </label>
                        <p>{{ $centreRecyclage->contact_number }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Email: </label>
                        <p>{{ $centreRecyclage->email }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Website: </label>
                        <p>{{ $centreRecyclage->website }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
