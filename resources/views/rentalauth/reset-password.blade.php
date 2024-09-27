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
                    <div class="section-title">Login </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="col-md-12 form-group">
                            <label for="email">Email Address</label>
                            <input name="email" type="email" value="{{ old('email') }}" required autofocus
                                autocomplete="username" />
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="remember_me">
                                <input id="remember_me" type="checkbox" name="remember">
                                <span class="">{{ __('Remember me') }}</span>
                            </label>
                            <div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input name="submit" type="submit" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    @endsection