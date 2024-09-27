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
                    <h1>Booking history</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Details -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Current Bookings</h2>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('failed'))
                                <div class="alert alert-danger">
                                    {{ session('failed') }}
                                </div>
                            @endif
                            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: auto">
                                <table class="table table-striped mb-0">
                                    <thead style="background-color: #0a3472; color:aliceblue">
                                        <tr>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Car details</th>
                                            <th scope="col">Daily rent</th>
                                            <th scope="col">Total cost</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($currentBookings as $rentalhistory)
                                            <tr>
                                                <td>{{ $rentalhistory->start_date }}</td>
                                                <td>{{ $rentalhistory->end_date }}</td>
                                                <td>{{ $rentalhistory->car->name }} </td>
                                                <td>{{ $rentalhistory->car->daily_rent_price }}</td>
                                                <td>{{ $rentalhistory->total_cost }}</td>
                                                <td>{{ $rentalhistory->status }}</td>
                                                <td><div class="btn-group" role="group" aria-label="Booking Actions">
                                                    <form action="{{ route('booking.cancel', $rentalhistory->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this rental?');" class="me-2">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-danger">Cancel</button>
                                                    </form>
                                                    <a class="btn btn-sm btn-primary" href="{{ route('booking.details', $rentalhistory->id) }}">View</a>
                                                </div>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-5"></div>
                            <h2>Past Bookings</h2>
                            <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                style="position: relative; height: auto">
                                <table class="table table-striped mb-5">
                                    <thead style="background-color: #0a3472; color:aliceblue">
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Car details</th>
                                            <th scope="col">Daily rent</th>
                                            <th scope="col">Total cost</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pastBookings as $rentalhistory)
                                            <tr>
                                                <td>{{ $rentalhistory->created_at->format('d/M/Y') }}</td>
                                                <td>{{ $rentalhistory->car->name }} - {{ $rentalhistory->car->brand }} -
                                                    {{ $rentalhistory->car->model }} - {{ $rentalhistory->car->year }}
                                                </td>
                                                <td>{{ $rentalhistory->car->daily_rent_price }}</td>
                                                <td>{{ $rentalhistory->total_cost }}</td>
                                                <td>{{ $rentalhistory->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                @include('components.CustomerMenu')
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