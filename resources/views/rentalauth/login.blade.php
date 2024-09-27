@extends('layouts.app')
@section('content')
    <!-- Header Banner -->
    <section class="banner-header section-padding bg-img" data-overlay-dark="4"
        data-background="{{ asset('assets/images/header/3.jpg') }}">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Rentax</h6>
                        <h1>Login <span>Page</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle">Access your account</div>
                    <div class="section-title">Login</div>
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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                            <input type="password" name="password" required autocomplete="current-password" />
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Remember Me & Forgot Password -->
                        <div class="col-md-12 form-group">
                            <div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-md-12">
                            <input name="submit" type="submit" value="Login">
                            Or Get new account<a class="button-1 mt-15 mb-15" href="{{ route('register') }}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    @endsection