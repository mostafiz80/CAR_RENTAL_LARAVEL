@extends('layouts.app')
@section('title', 'Car Details')
@section('content')
    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="5" data-background="{{ $cardata->image }}">
        <div class="v-middle">
            <div class="container">
                <div class="col-md-12">
                    <h6>{{ $cardata->car_type }}</h6>
                    <h1>{{ $cardata->name }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Details -->
    <section class="car-details section-padding">
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
                            <h4>{{ $cardata->daily_rent_price }}<span>/ rent per day</span></h4>
                        </div>
                        <div class="item">
                            <div class="features"><span><i class="omfi-door"></i> Name</span>
                                <p>{{ $cardata->name }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-passengers"></i> Brand</span>
                                <p>{{ $cardata->brand }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-transmission"></i> Model</span>
                                <p>{{ $cardata->model }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-luggage"></i> Year</span>
                                <p>{{ $cardata->year }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-condition"></i> Car type</span>
                                <p>{{ $cardata->car_type }}</p>
                            </div>
                            <div class="features"><span><i class="omfi-age"></i> Availability</span>
                                @if ($cardata->availability == 0)
                                <p>Unavailable</p>
                                @else
                                <p>Available</p>
                                @endif
                                
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
                            <form id="" action="{{ route('rental.start') }}" method="post"
                                enctype="multipart/form-data" class="">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        </div>
                                        <div class="alert alert-danger contact__error" style="display: none" role="alert">
                                        </div>
                                    </div>
                                </div>
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully. </div>
                                    </div>
                                </div>
                                <!-- form elements -->
                                <div class="row">
                                
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input1_wrapper">
                                            <label>Pick Up Date</label>
                                            <div class="input1_inner">
                                                <input name="start_date" type="text"
                                                    class="form-control input datepicker" placeholder="Pick Up Date"
                                                    required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="input1_wrapper">
                                            <label>Return Date</label>
                                            <div class="input1_inner">
                                                <input name="end_date" type="text" class="form-control input datepicker"
                                                    placeholder="Return Date">
                                            </div>
                                        </div>
                                        <input type="hidden" name="car_id" value="{{ $cardata->id }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="booking-button mt-15">Rent Now</button>
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
    @auth
        <!-- RentNow Popup -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="booking-box">
                            <div class="booking-inner clearfix">
                                <form id="bookingForm" action="{{ route('rental.start') }}" method="post"
                                    enctype="multipart/form-data" class="form1 contact__form clearfix">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none"
                                                role="alert"></div>
                                            <div class="alert alert-danger contact__error" style="display: none"
                                                role="alert"></div>
                                        </div>
                                    </div>
                                    <!-- form message -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none"
                                                role="alert"> Your message was sent successfully. </div>
                                        </div>
                                    </div>
                                    <!-- form elements -->
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <input name="name" value="{{ auth()->user()->name }}" type="text"
                                                placeholder="Full Name *" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <input name="email" value="{{ auth()->user()->email }}" type="email"
                                                placeholder="Email *" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Pick Up Date</label>
                                                <div class="input1_inner">
                                                    <input name="start_date" type="text"
                                                        class="form-control input datepicker" placeholder="Pick Up Date"
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Return Date</label>
                                                <div class="input1_inner">
                                                    <input name="end_date" type="text"
                                                        class="form-control input datepicker" placeholder="Return Date">
                                                </div>
                                            </div>
                                            <input type="hidden" name="car_id" value="{{ $cardata->id }}">
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="booking-button mt-15">Rent Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="booking-box">
                            <div class="booking-inner clearfix">
                                <form method="post" action="#0" class="form1 contact__form clearfix">
                                    <!-- form message -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none"
                                                role="alert"> Your message was sent successfully. </div>
                                        </div>
                                    </div>
                                    <!-- form elements -->
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <input name="name" value="{{ auth()->user()->name }}" type="text"
                                                placeholder="Full Name *" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <input name="email" value="{{ auth()->user()->email }}" type="email"
                                                placeholder="Email *" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Pick Up Date</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Pick Up Date" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Return Date</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Return Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="booking-button mt-15">Rent Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    @endauth
    @guest
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="booking-box">
                            <h2>You are not signed in.</h2>
                            <div class="wrap">
                                <a href="https://car.test/login" class="button-1 mt-5 mb-5">Login </a>&nbsp;
                                <a href="https://car.test/register" class="button-1 mt-5 mb-5">Register </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
@endsection
