@extends('layouts.app')

@section('content1')


<div class="wrapper">
    <div class="main">
        <div class="main-header">
            <span class="title">User Profile</span>
        </div>
    </div>

    <div class="profile">
        <div class="registration-form">
            <div class="form-contents">
                <div class="pic-container">
                    <i class="avatar"
                    ></i>
                    <span>Change Profile Picture</span>
                    <small>Tap to change</small>


                </div>
                <form action="" class="">
                    <div class="row">



                        <div class="form-group col-md-6 form-group-style" >
                            <label for="firstName">First Name</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter client first name"
                                required
                            />
                        </div>

                        <div class="form-group col-md-6 form-group-style">
                            <label for="lastName">Last Name</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter client last name"
                                required
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 form-group-style">
                            <label for="phone">Phone</label>
                            <input
                                class="form-control"
                                type="tel"
                                placeholder="Enter client phone number e.g. 08123456789"
                                required
                            />
                        </div>

                        <div class="form-group col-md-6 form-group-style">
                            <label for="email">Email</label>
                            <input
                                class="form-control"
                                type="email"
                                placeholder="Enter client email"
                                required
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 form-group-style">
                            <label for="country">Country</label>
                            <select
                                id="country"
                                name="country"
                                class="form-control lp_form"
                                style="color: #707981"
                                required
                            >
                                    <option selected disabled >Nigeria</option>
                                    <option id="nigeria" name="nigeria">Nigeria</option>
                                    <option id="usa" name="usa">USA</option>
                                    <option id="germany" name="germany">Germany</option>

                            </select>
                        </div>
                        <div class="form-group col-md-6 form-group-style">
                            <label for="state">State</label>
                            <select
                                id="state"
                                name="state"
                                class="form-control lp_form"
                                style="color: #707981"
                                required
                            >
                                <option selected disabled >Lagos</option>
                                <option id="lagos" name="lagos">Lagos</option>
                                <option id="fct" name="usa">FCT</option>
                                <option id="oyo" name="Oyo">Oyo</option>

                            </select>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 form-group-style">
                            <label for="city">City/Town</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter client city/town e.g. Ikeja"

                            />
                        </div>

                        <div class="form-group col-md-6 form-group-style">
                            <label for="streetAddress">Street Address</label>
                            <input
                                class="form-control"
                                type="address"
                                placeholder="Enter client street address e.g. 20 Felicia Koleoso Street"
                                required="true"
                            />
                        </div>

                    </div>
                    <div class="">
                        <div class="gender-role form-group-style">
                            <label for="gender">Gender</label>
                            <div class="gender-group">
                                <input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female" style="margin-left: 1rem;"> Female
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="save-changes">
                <button class="btn btn-success font-weight-bold">Save Changes</button>
            </div>

        </div>

    </div>
</div>

@endsection
@section('content')
    <div class="banner-area signin-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Profile<span> page</span></h1>
                        </div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="index.html">User</a></li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sign-in-area section-padding">
        <div class="container">
            <div class="row">

                    <div class="section-title text-center title-right">
                        <div class="title-border">
                            <h1> User Profile  <span>Page</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                    <div class="sign-up-form">
                        <form action="/userProfile-update/{{Auth::user()->id}}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="col-md-6">
                            <input name="first_name" type="text" class="form-box required"  value=" {{Auth::user()->first_name}}" placeholder="First Name">
                            <input name="last_namee" type="text" class="form-box required"  value=" {{Auth::user()->last_name}}" placeholder="Last Name">
                            <input name="tribe" type="text" class="form-box required"  value=" {{Auth::user()->tribe}}" placeholder="Tribe">
                            <input name="state" type="text" class="form-box required" value=" {{Auth::user()->state}}"  placeholder="State of Origin">
                            </div>
                            <div class="col-md-6">
                            <input name="nationality" type="text" class="form-box required" value=" {{Auth::user()->nationality}}"  placeholder="Nationality">
                            <input name="email" type="email" class="form-box required"  value=" {{Auth::user()->email}}" placeholder="Email Address">
                            <input type="password" name="psw" class="form-box"  value=" {{Auth::user()->password}}" placeholder="Password">
                            <input type="password" name="re-psw" class="form-box"  placeholder="Repeat Password">
                            </div>
                            <input type="submit" class="submit-button" value="Save">

                        </form>
                    </div>
                </div>

        </div>
    </div>
@endsection
