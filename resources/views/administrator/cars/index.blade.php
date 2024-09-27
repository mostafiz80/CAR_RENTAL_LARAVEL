@extends('administrator.layouts.adminapp')
@section('title', 'Cars List')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Cars</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cars List</li>
            </ol>
        </nav>
        <h2 class="h4">All cars</h2>
        
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('cars.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Add new car
        </a>
    </div>
</div>

<div class="card card-body border-0 shadow table-wrapper table-responsive">
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
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-gray-200">Car name</th>
                <th class="border-gray-200">Years</th>
                <th class="border-gray-200">Car type</th>
                <th class="border-gray-200">Availablity</th>
                <th class="border-gray-200">Daily Rent</th>
                <th class="border-gray-200">Image</th>
                <th class="border-gray-200">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Item -->
            @foreach($cars as $car) 
            <tr>
                <td>
                    <span class="fw-normal">{{ $car->name }} - {{ $car->brand }} - {{ $car->model }}</span>
                </td>

                <td><span class="fw-normal">{{ $car->year }}</span></td>
                <td><span class="fw-bold">{{ $car->car_type }}</span></td>
                @if ($car->availability == 1)
                <td><b>Available</b></td>
                @else
                <td><b>Unavailable</b></td>
                @endif
                
                <td><span class="fw-bold">${{ $car->daily_rent_price }}</span></td>
                <td><img src="{{ asset($car->image) }}" alt="" srcset=""></td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon icon-sm">
                                <span class="fas fa-ellipsis-h icon-dark"></span>
                            </span>
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu py-0">
                            <a class="dropdown-item rounded-top" href="{{ route('cars.show', $car->id) }}"><span
                                    class="fas fa-eye me-2"></span>View Details</a>
                            <a class="dropdown-item" href="{{ route('cars.edit', $car->id) }}"><span
                                    class="fas fa-edit me-2"></span>Edit</a>
                                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger rounded-bottom" onclick="return confirm('Are you sure you want to delete this car?');">
                                            <span class="fas fa-trash-alt me-2"></span>Remove
                                        </button>
                                    </form>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- Item -->
            @endforeach
        </tbody>
    </table>
    <div
        class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
        {{$cars->links()}}
    </div>
</div>
@endsection