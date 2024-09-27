@extends('administrator.layouts.adminapp')
@section('title', 'Manages Rentals')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5>Car Booking Details</h5>
                        </div>
                        <div class="card-body">
                            <!-- Car Information -->
                            <h6 class="card-title">Car Details</h6>
                            <p class="mb-2"><strong>Car Name:</strong> {{ $booking->car->name }}</p>
                            <p class="mb-2"><strong>Brand:</strong> {{ $booking->car->brand }}</p>
                            <p class="mb-2"><strong>Model:</strong> {{ $booking->car->model }}</p>
                            <p class="mb-2"><strong>Car Type:</strong> {{ $booking->car->car_type }}</p>
                            <p class="mb-2"><strong>Total Cost: </strong> ${{ $booking->total_cost }}</p>
        
                            <!-- Booking Information -->
                            <hr>
                            <h6 class="card-title">Booking Information</h6>
                            <p class="mb-2"><strong>Booking Date:</strong> {{ \Carbon\Carbon::parse($booking->created_at)->format('d-m-Y') }}</p>
                            <p class="mb-2"><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($booking->start_date)->format('d-m-Y') }}</p>
                            <p class="mb-2"><strong>End Date:</strong> {{ \Carbon\Carbon::parse($booking->end_date)->format('d-m-Y') }}</p>
                            <p class="mb-2"><strong>Status:</strong> <span class="badge bg-info">{{ ucfirst($booking->status) }}</span></p>
        
                            <!-- Customer Information -->
                            <hr>
                            <h6 class="card-title">Customer Information</h6>
                            <p class="mb-2"><strong>Customer Name:</strong> {{ $booking->user->name }}</p>
                            <p class="mb-2"><strong>Customer Email:</strong> {{ $booking->user->email }}</p>
                            <p class="mb-2"><strong>Phone:</strong> {{ $booking->user->phone }}</p>
                            <p class="mb-2"><strong>Address:</strong> {{ $booking->user->address }}</p>
                            
                            <!-- Action Buttons -->
                            <hr>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('rentals.index') }}" class="btn btn-secondary">Back to Bookings</a>
                                
                                @if ($booking->status == 'ongoing')
                                <form action="{{ route('rentals.status.complete', $booking->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-success">
                                        Complete
                                    </button>
                                </form>
                                <form action="{{ route('rentals.status.cancel', $booking->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        Cancel
                                    </button>
                                </form>
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection