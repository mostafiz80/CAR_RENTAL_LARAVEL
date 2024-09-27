@extends('administrator.layouts.adminapp')
@section('title', 'Edit car')
@section('content')

<div class="row mt-2">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Update car information</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
            <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="name">Car Name</label>
                            <input name="name" class="form-control" id="name" type="text"
                                value="{{ $car->name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input name="model" class="form-control" id="model" type="text" value="{{ $car->model }}">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="year">Brand Name</label>
                            <input name="brand" class="form-control" id="brand" type="text" value="{{ $car->brand }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="year">Years</label>
                            <input name="year" class="form-control" id="year" type="text" value="{{ $car->year }}">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="car_type">Car type</label>
                            <input name="car_type" class="form-control" id="car_type" type="text" value="{{ $car->car_type }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="daily_rent_price">Rent Price</label>
                            <input name="daily_rent_price" class="form-control" id="daily_rent_price" type="text" value="{{ $car->daily_rent_price }}">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="availability">Availablity</label>
                            <select name="availability" id="availability" class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @if ($car->availability == 1)
                                <option value="{{ $car->availability }}" selected>Yes</option>    
                                @else
                                <option value="{{ $car->availability }}" selected>No</option>       
                                @endif
                                
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="image">Car images</label>
                            <input name="image" class="form-control" id="brand" type="file">
                        </div>
                    </div>
                </div>
                <div class="mt-4"><img src="{{ asset($car->image) }}" alt="{{ $car->name }}" class="img-fluid"></div>
                
                <div class="mt-3">
                    <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Save All</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection