@extends('layouts.app')
@section('content')
    <div class="banner-area blog-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Tourism Naija  <span>Blog</span></h1>
                        </div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.blogSideSection')
                </div>
                <div class="col-md-9">
                    <div class="single-blog-post">
                        <div class="single-blog-post-img">
                            <a href="#"><img src="{{asset('uiFix/img/blog/large-1.jpg')}}" alt=""></a>
                            <div class="date-time">
                                <span class="date">10</span>
                                <span class="month">AUG</span>
                            </div>
                        </div>
                        <div class="single-blog-post-text">
                            <h4><a href="blog-details.html">How's Daddy Yinka doing</a></h4>
                            <div class="author-comments">
                                <span><i class="fa fa-user"></i>daddy yinka</span>
                                <span><i class="fa fa-comment"></i>15 Comments</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                        </div>
                        <div class="blog-button-links">
                            <a href="{{ route('blog-page') }}" class="blog-button">Learn More</a>
                            <div class="blog-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog-post">
                        <div class="single-blog-post-img">
                            <a href="#"><img src="{{asset('uiFix/img/blog/large-1.jpg')}}" alt=""></a>
                            <div class="date-time">
                                <span class="date">10</span>
                                <span class="month">AUG</span>
                            </div>
                        </div>
                        <div class="single-blog-post-text">
                            <h4><a href="blog-details.html">How's Daddy Yinka doing</a></h4>
                            <div class="author-comments">
                                <span><i class="fa fa-user"></i>daddy yinka</span>
                                <span><i class="fa fa-comment"></i>15 Comments</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                        </div>
                        <div class="blog-button-links">
                            <a href="{{ route('blog-page') }}" class="blog-button">Learn More</a>
                            <div class="blog-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog-post">
                        <div class="single-blog-post-img">
                            <a href="#"><img src="{{asset('uiFix/img/blog/large-1.jpg')}}" alt=""></a>
                            <div class="date-time">
                                <span class="date">10</span>
                                <span class="month">AUG</span>
                            </div>
                        </div>
                        <div class="single-blog-post-text">
                            <h4><a href="blog-details.html">How's Daddy Yinka doing</a></h4>
                            <div class="author-comments">
                                <span><i class="fa fa-user"></i>daddy yinka</span>
                                <span><i class="fa fa-comment"></i>15 Comments</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                        </div>
                        <div class="blog-button-links">
                            <a href="{{ route('blog-page') }}" class="blog-button">Learn More</a>
                            <div class="blog-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pagination-content">
                        <div class="pagination-button">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="current"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
