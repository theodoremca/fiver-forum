@extends('layouts.app')

@section('content')
    <!--Banner Area Start-->
    <div class="banner-area signin-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Sign <span>IN</span></h1>
                        </div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Sign In</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End of Banner Area-->
    <!--Sign In Form Start-->
    <div class="sign-in-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title text-center title-left">
                        <div class="title-border">
                            <h1>Sign <span>in</span></h1>
                        </div>
                    </div>
                    <div class="sign-in-container">
                        <form method="POST" action="{{ route('login') }}" id="signin">
                            @csrf
                            <div class="sign-in-buttons">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <a href="#" class="facebook">Facebook</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <a href="#" class="twitter">Twitter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sign-in-form">
                                <input name="email" type="email" class="form-box required" placeholder="Email Address">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="password" name="password" class="form-box required" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <div class="sign-in-settings">
                                    <input type="checkbox" name="newsletter" value="1">
                                    <span>Remember me</span>
                                    <a href="#">Lost your password?</a>
                                </div>
                                <input type="submit" class="submit-button" value="Signin">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title text-center title-right">
                        <div class="title-border">
                            <h1>Create New <span>Account</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                    <div class="sign-up-form">
                        <form method="POST" action="{{ route('register') }}">>
                            @csrf
                            <input name="first_name" type="text" class="form-box required" placeholder="First Name">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong >{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input name="last_name" type="text" class="form-box required" placeholder="Last Name">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input name="tribe" type="text" class="form-box required" placeholder="Tribe">
                            @error('tribe')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input name="state" type="text" class="form-box required" placeholder="State of Origin">


                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input name="nationality" type="text" class="form-box required" placeholder="Nationality">

                            @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input name="email" type="email" class="form-box required" placeholder="Email Address">


                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="password" name="password" class="form-box" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input id="password-confirm" type="password" name="password_confirmation" class="form-box" placeholder="Repeat Password">


                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <button type="submit" class="submit-button">
                                {{ __('Register') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Sign In Form-->

@endsection
