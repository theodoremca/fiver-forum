@extends('layouts.app')

@section('content')
    <!--Banner Area Start-->
    <div class="banner-area contact-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Contact <span>Us</span></h1>
                        </div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End of Banner Area-->
    <!--Contact Information Area Start-->
    <div class="contact-information-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Contact <span>Information</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="contact-info text-center">
                        <div class="contact-image">
                            <div class="contact-icon">
                                <div class="icon-table-cell">
                                    <img class="primary-img" src="{{asset('uiFix/img/icon/contact-1.png')}}" alt="">
                                    <img class="secondary-img" src="{{asset('uiFix/img/icon/contact-1-hover.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="contact-text">
                            <h4>Address</h4>
                            <p>Westminster Corporate Center<br>
                                30A Vreeland Road<br>
                                P.O. Box 6</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="contact-info text-center">
                        <div class="contact-image">
                            <div class="contact-icon">
                                <div class="icon-table-cell">
                                    <img class="primary-img" src="{{asset('uiFix/img/icon/contact-2.png')}}" alt="">
                                    <img class="secondary-img" src="{{asset('uiFix/img/icon/contact-2-hover.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="contact-text">
                            <h4>Phone</h4>
                            <p>+123 456 7890<br>
                                +123 456 7890</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="contact-info text-center">
                        <div class="contact-image">
                            <div class="contact-icon">
                                <div class="icon-table-cell">
                                    <img class="primary-img" src="{{asset('uiFix/img/icon/contact-3.png')}}" alt="">
                                    <img class="secondary-img" src="{{asset('uiFix/img/icon/contact-3-hover.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="contact-text">
                            <h4>Fax</h4>
                            <p>(973) 377-5077<br>
                                (001) 254-7359</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm">
                    <div class="contact-info text-center">
                        <div class="contact-image">
                            <div class="contact-icon">
                                <div class="icon-table-cell">
                                    <img class="primary-img" src="{{asset('uiFix/img/icon/contact-4.png')}}" alt="">
                                    <img class="secondary-img" src="{{asset('uiFix/img/icon/contact-4-hover.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>admin@power-boosts<br>
                                admin@power-boosts.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <!-- google-map-area start -->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="map-area">
                <div id="googleMap" style="width:100%;height:737px;filter: grayscale(100%)"></div>
            </div>
        </div>
        <!-- google-map-area end -->
        <div class="contact-us-form-wrapper">
            <div class="container">
                <div class="contact-us-form section-padding">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-title text-center">
                                <div class="title-border">
                                    <h1>Contact <span>US</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="https://designermachinefonts.net/dm/html/adventure/adventures/mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="f_name" type="text" class="form-box" placeholder="First name">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="l_name" type="text" class="form-box" placeholder="Last name">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" type="email" class="form-box" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="number" type="text" class="form-box" placeholder="Phone number">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" class="yourmessage" placeholder="Your message"></textarea>
                                        <input type="submit" value="Send Message" class="submit-button">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Contact Form-->

@endsection
