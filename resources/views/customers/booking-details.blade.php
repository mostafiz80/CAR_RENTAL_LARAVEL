@extends('layouts.app')
@section('title', 'Booking history')
@section('content')
    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="2"
        data-background="{{ asset('assets/images/1.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="col-md-12">
                    <h6>Car rental</h6>
                    <h1>Booking Details</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Details -->
    <section class="service-details">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
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
                                <a href="{{ route('booking.history') }}" class="btn btn-secondary">Back to Bookings</a>
                                
                                <form action="{{ route('booking.cancel', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Cancel Booking</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lets Talk -->
    <section class="lets-talk bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="img/slider/3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Rent Your Car</h6>
                    <h5>Interested in Renting?</h5>
                    <p>Don't hesitate and send us a message.</p> <a href="tel:+8001234567"
                        class="button-1 mt-15 mb-15 mr-10"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a> <a
                        data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0"
                        class="button-2 mt-15 mb-15">Rent Now <span class="ti-arrow-top-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/1.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/2.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/3.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/4.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/5.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/6.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/7.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection