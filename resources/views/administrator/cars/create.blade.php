@extends('administrator.layouts.adminapp')
@section('title', 'Add new car')
@section('content')
    <div class="row mt-2">
        <div class="col-12 col-xl-8">
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">Add new car</h2>
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
                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="name">Car Name</label>
                                <input name="name" class="form-control" id="name" value="{{ old('name') }}" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input name="model" value="{{ old('model') }}" class="form-control" id="model" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="year">Brand Name</label>
                                <input name="brand" value="{{ old('brand') }}" class="form-control" id="brand" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="year">Years</label>
                                <input name="year" value="{{ old('year') }}" class="form-control" id="year" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="car_type">Car type</label>
                                <input name="car_type" value="{{ old('car_type') }}" class="form-control" id="car_type" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="daily_rent_price">Rent Price</label>
                                <input name="daily_rent_price" value="{{ old('daily_rent_price') }}" class="form-control" id="daily_rent_price" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="availability">Availablity</label>
                                <select name="availability" id="availability"
                                    class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="" selected>Choose availability</option>
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
                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Add Car</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
