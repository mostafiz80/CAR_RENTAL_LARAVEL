@extends('administrator.layouts.adminapp')
@section('title', 'Manages Admin Role')
@section('content')
    <div class="row mt-4">
        <div class="col-8 col-xxl-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                    <h2 class="fs-5 fw-bold mb-0">Car Details</h2>
                    <a href="{{ route('cars.index') }}" class="btn btn-sm btn-primary">See all</a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent border-bottom py-3 px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar-md">
                                        <img class="rounded" alt="Image placeholder"
                                            src="{{ asset($car->image) }}">
                                    </a>
                                </div>
                                <div class="col-auto px-0">
                                    <h4 class="fs-6 text-dark mb-0">
                                        <a href="#">{{ $car->name }}</a>
                                    </h4>
                                    <span class="small">{{ $car->brand }} - {{ $car->model }} {{ $car->year }}</span>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-6 fw-bolder text-dark">${{ $car->daily_rent_price }}</span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item bg-transparent border-bottom py-3 px-0">
                            <div class="row align-items-center">
                               
                                <div class="col-auto px-0">
                                    <h4 class="fs-6 text-dark mb-0">
                                        <a href="#">Car type</a>
                                    </h4>
                                    <span class="small">{{ $car->car_type }}</span>
                                </div>
                            
                            </div>
                        </li>
                        <li class="list-group-item bg-transparent border-bottom py-3 px-0">
                            <div class="row align-items-center">
                                
                                <div class="col-auto px-0">
                                    <h4 class="fs-6 text-dark mb-0">
                                        <a href="#">Availability</a>
                                    </h4>
                                    <span class="small">
                                        @if ($car->availability == 1)
                                            Available
                                        @else
                                            Unavailable
                                        @endif
                                    </span>
                                </div>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection