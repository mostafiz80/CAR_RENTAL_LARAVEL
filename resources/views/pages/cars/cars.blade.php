@extends('layouts.app')
@section('title', 'Browse Cars')
@section('content')
    <!-- noUiSlider CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.css" rel="stylesheet">
    <!-- noUiSlider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.js"></script>
    <section class="banner-header section-padding bg-img" data-overlay-dark="5"
        data-background="{{ asset('assets/images/11.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h6>Rent Now</h6>
                    <h1><span>Select</span> Luxury Car</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Cars 4 -->
    <section class="cars4 section-padding">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="sidebar-list">
                        <div class="search">
                            <form method="GET" action="/">
                                <input type="text" name="search" placeholder="Search ..." id="search-input">
                                <button type="button" id="search-btn"><i class="ti-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="item">
                            <form method="GET" action="{{ route('carslisting') }}">
                                <h5>Select Brand</h5>
                                <div class="filter-radio-group">
                                    @foreach ($filters as $car)
                                        <div class="form-group">
                                            <input type="radio" id="{{ $car->brand }}" name="brand"
                                                value="{{ $car->brand }}">
                                            <label for="{{ $car->brand }}">{{ $car->brand }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <h5>Car Type</h5>
                                <div class="filter-radio-group">
                                    @foreach ($filters as $car)
                                        <div class="form-group">
                                            <input type="radio" id="{{ $car->car_type }}" name="car_type"
                                                value="{{ $car->car_type }}">
                                            <label for="{{ $car->car_type }}">{{ $car->car_type }}</label>
                                        </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <h2>Filter by Price</h2>
                        <div id="price-slider"></div>
                        <div class="d-flex justify-content-between mt-3">
                            <span>Min Price: <span id="min-price">0</span> KWD</span>
                            <span>Max Price: <span id="max-price">1000</span> KWD</span>
                        </div>
                        <input type="hidden" id="min-price-input" name="min_price">
                        <input type="hidden" id="max-price-input" name="max_price">
                    </div>
                    <button type="submit" class="button-1 ">Filters</button>
                    </form>
                </div>
                <!-- Content -->
                <div class="col-lg-8 col-md-12 car-list">
                    <div class="row" id="car-list">
                        @foreach ($cars as $car)
                            <div class="col-lg-6 col-md-12 mb-30">
                                <div class="item">
                                    <figure><img src="{{ $car->image }}" alt="" class="img-fluid"></figure>
                                    <div class="content">
                                        <div class="cont">
                                            <h3>{{ $car->name }}</h3>
                                            <div class="features"><span><i class="omfi-door"></i> Brand</span>
                                                <p>{{ $car->brand }}</p>
                                            </div>
                                            <div class="features"><span><i class="omfi-passengers"></i> Model</span>
                                                <p>{{ $car->model }}</p>
                                            </div>
                                            <div class="features"><span><i class="omfi-transmission"></i> Years</span>
                                                <p>{{ $car->year }}</p>
                                            </div>
                                            <div class="features"><span><i class="omfi-luggage"></i> Car type</span>
                                                <p>{{ $car->car_type }}</p>
                                            </div>
                                            <div class="features"><span><i class="omfi-luggage"></i> Daily Rent Price</span>
                                                <p>{{ $car->daily_rent_price }}</p>
                                            </div>
                                            <div class="features"><span><i class="omfi-luggage"></i> Availability</span>
                                                @if ($car->availability == 0)
                                                    <p>Unavailable</p>
                                                @else
                                                    <p>Available</p>
                                                @endif
                                            </div>
                                            <div class="book mt-30">
                                                <div>
                                                    <div class="price">${{ $car->daily_rent_price }} <span>/ day</span>
                                                    </div>
                                                </div>
                                                <a href="{{ route('car.details', $car->id) }}" class="button-4">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 mt-30 text-center">
                            {{ $cars->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JS for Dynamic Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var priceSlider = document.getElementById('price-slider');
            var minPriceInput = document.getElementById('min-price-input');
            var maxPriceInput = document.getElementById('max-price-input');
            var minPriceDisplay = document.getElementById('min-price');
            var maxPriceDisplay = document.getElementById('max-price');
            // Initialize noUiSlider
            noUiSlider.create(priceSlider, {
                start: [0, 1000],
                connect: true,
                range: {
                    'min': 0,
                    'max': 1000
                },
                step: 10,
                format: {
                    to: function(value) {
                        return Math.round(value);
                    },
                    from: function(value) {
                        return Number(value);
                    }
                }
            });
            // Update the input fields and display values when the slider changes
            priceSlider.noUiSlider.on('update', function(values, handle) {
                var minPrice = values[0];
                var maxPrice = values[1];
                minPriceDisplay.textContent = minPrice;
                maxPriceDisplay.textContent = maxPrice;
                minPriceInput.value = minPrice;
                maxPriceInput.value = maxPrice;
            });
        });
    </script>
@endsection