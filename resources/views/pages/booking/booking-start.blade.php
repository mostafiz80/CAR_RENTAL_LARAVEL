@extends('layouts.app')
@section('title', 'Confirm Booking')
@section('content')
    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="5" data-background="{{ $cardata->image }}">
        <div class="v-middle">
            <div class="container">
                <div class="col-md-12">
                    <h6>{{ $cardata->name }}-{{ $cardata->model }}-{{ $cardata->year }} Cost {{ $total_cost }}</h6>
                    <h1>Confirm Booking</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Details -->
    <section class="car-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row mb-60">
                        <div class="col-md-12">
                            <h3>General Information</h3>
                            <p class="mb-30">Lorem pretium fermentum quam, sit amet cursus ante sollicitudin velen morbi
                                consesua the miss sustion consation miss orcisition amet iaculis nisan. Lorem pretium
                                fermentum quam sit amet cursus ante sollicitudin velen fermen orbinetion consesua the risus
                                consequation the porttiton.</p>
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>24/7 Roadside Assistance</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>Free Cancellation & Return</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>Rent Now Pay When You Arrive</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-car">
                        <div class="title">
                            <h4>Confirm Booking</span></h4>
                        </div>
                        <div class="item">
                            <div class="features"><span><i class="omfi-door"></i> Name</span>
                                <p>{{ $cardata->name }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-passengers"></i> Brand</span>
                                <p>{{ $cardata->brand }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-luggage"></i> Year</span>
                                <p>{{ $cardata->year }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-age"></i> Start Date</span>
                                <p>{{ $start_date }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-age"></i> End Date</span>
                                <p>{{ $end_date }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-age"></i> Total cost</span>
                                <p><b>${{ $total_cost }}</b></p>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('rental.confirm') }}" method="POST">
                                @csrf
                                <!-- form elements -->
                                <div class="row">
                                    <input type="hidden" name="car_id" value="{{ $car_id }}">
                                    <input type="hidden" name="start_date" value="{{ $start_date }}">
                                    <input type="hidden" name="end_date" value="{{ $end_date }}">
                                    <input type="hidden" name="total_cost" value="{{ $total_cost }}">
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="booking-button mt-15">Confirm-></button>
                                    </div>
                                </div>
                            </form>
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
