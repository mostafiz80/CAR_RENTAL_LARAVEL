@extends('layouts.app')
@section('title', 'Booked Successful')
@section('content')
    <!-- Header Banner -->
    <section class="d-flex justify-content-center align-items-center vh-100">
        <div class="card text-center">
            <div class="card-body">
                <h2 class="card-title text-success">Car Booked Successfully!</h2>
                <p class="card-text mt-3">Thank you for booking with us. Your car booking has been confirmed successfully.
                </p>
                <div class="mt-4">
                    <h5><strong>Booking Details:</strong></h5>
                    <ul class="list-unstyled">
                        <li><strong>Car Name:</strong> {{ $bookingdata->car->name }}</li>
                        <li><strong>Start Date:</strong> {{ $bookingdata->start_date }}</li>
                        <li><strong>End Date:</strong> {{ $bookingdata->end_date }}</li>
                        <li><strong>Total Cost:</strong> ${{ $bookingdata->total_cost }}</li>
                        <li><strong>Status:</strong> {{ ucfirst($bookingdata->status) }}</li>
                        <li><strong>Payment type:</strong> Cash Payment</li>
                    </ul>
                </div>
                <a href="{{ route('customer.dashboard') }}" class="btn btn-primary mt-4">Go to Dashboard</a>
                <a href="{{ route('booking.history') }}" class="btn btn-secondary mt-4">Booking History</a>
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
