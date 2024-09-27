@extends('administrator.layouts.adminapp')
@section('title', 'My Profile')
@section('content')
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form wire:submit.prevent="save" action="#" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">Full Name</label>
                            <input name="name" class="form-control" id="name"
                                type="text" value="{{ $user->name }}" required>
                        </div>
                    </div>

                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email"
                                type="email" value="{{ $user->email }}" disabled>
                        </div>
                    </div>
                  
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <input class="form-control" id="phone"
                                type="phone" name="phone" value="{{ $user->phone }}">
                        </div>
                    </div>
                  
                </div>
                <h2 class="h5 my-4">Location</h2>
                <div class="row">
                    <div class="col-sm-9 mb-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" class="form-control" id="address"
                                type="text" value="{{ $user->address }}">
                        </div>
                    </div>
 
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">Save All</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow border-0 text-center p-0">
                    <div wire:ignore.self class="profile-cover rounded-top"
                        data-background="../assets/img/profile-cover.jpg"></div>
                    <div class="card-body pb-5">
                        <img src="../assets/img/team/profile-picture-1.jpg"
                            class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                        <h4 class="h3">
                            Admin User
                        </h4>
                        <h5 class="fw-normal">Senior Software Engineer</h5>
                        <p class="text-gray mb-4">New York, USA</p>
                        <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2"
                            href="#">
                            <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                </path>
                            </svg>
                            Connect
                        </a>
                        <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection