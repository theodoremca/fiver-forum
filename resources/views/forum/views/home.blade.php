@extends('layouts.app')

@section('content')
    <div class="slider-area">
        <div class="preview-2">
            <div id="nivoslider" class="slides">

                <a href="#"><img src="{{ asset('uiFix/img/slider/slider-1.jpg') }}" alt="" title="#slider-1-caption1"/></a>
                <a href="#"><img src="{{ asset('uiFix/img/slider/slider-2.jpg') }}" alt="" title="#slider-1-caption1"/></a>
            </div>
            <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                <div class="banner-content slider-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content">
                                    <h1 class="title1">TOURISM NAIJA</h1>
                                    <h2 class="sub-title">The right tour for the</h2>
                                    <h2 class="sub-title">right <span>traveller</span></h2>
                                    <form action="#" id="banner-searchbox" class="hidden-xs">
                                        <div class="adventure-cat">
                                            <select name="category" class="search-adventure">
                                                <option>Select Adventure</option>
                                                <option>Bungee jumping</option>
                                                <option>Bicycle touring</option>
                                                <option>Jungle tourism</option>
                                                <option>Shark tourism</option>
                                                <option>Mountain biking</option>
                                                <option>Mountaineering</option>
                                                <option>Rock Adventure</option>
                                            </select>
                                        </div>
                                        <div class="adventure-cat destination">
                                            <select name="destination" class="search-adventure">
                                                <option>Select Your Destination</option>
                                                <option> a PLACE</option>
                                                <option> a PLACE</option>
                                                <option> a PLACE</option>
                                                <option> a PLACE</option>
                                            </select>
                                        </div>
                                        <div class="adventure-cat floatright">
                                            <select name="date" class="search-adventure">
                                                <option>lIFE STYLE </option>
                                                <option>lIFE STYLE </option>
                                                <option>lIFE STYLE </option>
                                                <option>lIFE STYLE </option>
                                                <option>lIFE STYLE </option>
                                                <option>lIFE STYLE </option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" id="btn-search-category">SEARCH</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Slider Area-->
    <div class="adventures-grid section-padding">
        <div class="container">
            <div class="row">

                <div class="clearfix"></div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-adventure">
                        <a href="#"><img src="{{asset('uiFix/img/adventure-list/1.jpg')}}" alt=""></a>
                        <div class="adventure-text effect-bottom">
                            <div class="transparent-overlay">
                                <h4><a href="#">Tourism </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-adventure">
                        <a href="#"><img src="{{asset ('uiFix/img/adventure-list/1.jpg')}}" alt=""></a>
                        <div class="adventure-text effect-bottom">
                            <div class="transparent-overlay">
                                <h4><a href="#">Lifestyle </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-adventure">
                        <a href="#"><img src="{{asset ('uiFix/img/adventure-list/1.jpg')}}"  alt=""></a>
                        <div class="adventure-text effect-bottom">
                            <div class="transparent-overlay">
                                <h4><a href="#">Culture </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-adventure">
                        <a href="#"><img src="{{asset ('uiFix/img/adventure-list/1.jpg')}}"  alt=""></a>
                        <div class="adventure-text effect-bottom">
                            <div class="transparent-overlay">
                                <h4><a href="#">Destinations </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ornare ut est in molestie. Vestibulum convallis congue velit, et facilisis lorem efficitur et. Morbi vitae pellentesque nulla. </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--About Area Start-->
    <div id="about" class="about-area text-center hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 col-sm-10 col-sm-offset-2">
                    <div class="about-container section-padding">
                        <div class="section-title">
                            <div class="title-border">
                                <h1>About <span>Tourism Naija</span></h1>
                            </div>
                        </div>
                        <div class="about-text">
                            <h1>Daddy Yinka Was Here</h1>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <a href="#">Why Daddy Yinka?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Latest <span>Blog Posts</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel">
                    <div class="col-md-6">
                        <div class="single-blog hover-effect">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-image box-hover">
                                        <a href="{{ route('blog-page') }}"><img src="{{ asset ('uiFix/img/blog/1.jpg')}}" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">10</span>
                                            <span class="month">AUG</span>
                                        </div>
                                    </div>
                                    <div class="blog-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 margin-left">
                                    <div class="blog-text">
                                        <h4><a href="{{ route('blog-page') }}">Daddy Yinka Daddy Yinka  Daddy Yinka  Daddy Yinka </a></h4>
                                        <p>The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.</p>
                                        <a href="{{ route('blog-page') }}" class="button-one">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog hover-effect no-margin">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-image box-hover">
                                        <a href="{{ route('blog-page') }}"><img src="{{ asset ('uiFix/img/blog/1.jpg')}}" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">10</span>
                                            <span class="month">AUG</span>
                                        </div>
                                    </div>
                                    <div class="blog-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 margin-left">
                                    <div class="blog-text">
                                        <h4><a href="blog-details.html">Daddy Yinka Daddy Yinka  Daddy Yinka  Daddy Yinka </a></h4>
                                        <p>The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.</p>
                                        <a href="{{ route('blog-page') }}" class="button-one">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area section-padding" style="background-color: rgba(22, 206, 104, 0);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Latest <span>News</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel">
                    <div class="col-md-6">
                        <div class="single-blog hover-effect">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-image box-hover">
                                        <a href="{{ route('blog-page') }}"><img src="{{ asset ('uiFix/img/blog/1.jpg')}}" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">10</span>
                                            <span class="month">AUG</span>
                                        </div>
                                    </div>
                                    <div class="blog-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 margin-left">
                                    <div class="blog-text">
                                        <h4><a href="{{ route('blog-page') }}">Daddy Yinka Daddy Yinka  Daddy Yinka  Daddy Yinka </a></h4>
                                        <p>The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.</p>
                                        <a href="{{ route('blog-page') }}" class="button-one">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog hover-effect no-margin">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="blog-image box-hover">
                                        <a href="{{ route('blog-page') }}"><img src="{{ asset ('uiFix/img/blog/1.jpg')}}" alt=""></a>
                                        <div class="date-time">
                                            <span class="date">10</span>
                                            <span class="month">AUG</span>
                                        </div>
                                    </div>
                                    <div class="blog-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 margin-left">
                                    <div class="blog-text">
                                        <h4><a href="{{ route('blog-page') }}">Daddy Yinka Daddy Yinka  Daddy Yinka  Daddy Yinka </a></h4>
                                        <p>The question of What Travel Is is inter- esting, but more for what it tells you about the people doing the asking.</p>
                                        <a href="{{ route('blog-page') }}" class="button-one">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
