@extends('layouts.app')
@section('content')
    <!-- Header Banner -->
    <section class="banner-header bg-img" data-overlay-dark="4"
        data-background="{{ asset('assets/images/header/3.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Installation</h6>
                        <h1>Add <span>Administrator</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle">Create a new admin account</div>
                    <div class="section-title">Create a new admin account</div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Display All Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('installation.store.admin') }}">
                        @csrf
                        <!-- Name Field -->
                        <div class="col-md-12 form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" value="{{ old('name') }}" required/>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Email Field -->
                        <div class="col-md-12 form-group">
                            <label for="email">Email Address</label>
                            <input name="email" type="email" value="{{ old('email') }}" required autofocus
                                autocomplete="username" />
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Password Field -->
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" required autocomplete="new-password" />
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Confirm Password Field -->
                        <div class="col-md-12 form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" required autocomplete="new-password" />
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="col-md-12">
                            <input name="submit" type="submit" value="Create Admin">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
@endsection