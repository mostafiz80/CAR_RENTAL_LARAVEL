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
                        <h1>Forgot <span>Page</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
                    <div class="section-title">Forgot Password </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-6">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="col-md-12 form-group">
                            <label for="email">Email Address</label>
                            <input name="email" type="email" value="{{ old('email') }}" required autofocus
                                autocomplete="username" />
                        </div>
                        <div class="col-md-12 form-group">
         
                        

                        </div>
                        <div class="col-md-12">
                            <input name="submit" type="submit" value="Submit">
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="mb-5"></div>
    @endsection


