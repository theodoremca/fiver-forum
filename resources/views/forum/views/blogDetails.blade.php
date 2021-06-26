@extends('layouts.app')
@section('content')
    <div class="banner-area blog-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Adventure <span>Blog</span></h1>
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
                    <div class="single-blog-post blog-post-details">
                        <div class="single-blog-post-img">
                            <a href="#"><img src="{{asset('uiFix/img/blog/large-1.jpg')}}" alt=""></a>
                            <div class="date-time">
                                <span class="date">10</span>
                                <span class="month">AUG</span>
                            </div>
                        </div>
                        <div class="single-blog-post-text">
                            <h4>How's the weather? Best times to travel.....</h4>
                            <div class="author-comments">
                                <span><i class="fa fa-user"></i>Daddy yinka</span>
                                <span><i class="fa fa-comment"></i>15 Comments</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                            <p class="dark-bold">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown and printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="blog-button-links">
                            <span class="blog-tags">Tags: <a href="#">rock,</a> <a href="#">river,</a> <a href="#">Dress,</a> <a href="#">animal</a></span>
                            <div class="blog-links">
{{--                                this button will show for only authorized users--}}
                                <button  class="comment-btn" value="">Edit Post</button>
                        </div>
                    </div>
                    <div class="blog-comments">
                        <h4 class="blog-title">User <span>Comments</span></h4>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{asset('uiFix/img/blog/author-1.jpg')}}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">Laycon</a></h4>
                                    <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                    <span class="comment-time">45 Minutes Ago</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                            </div>
                        </div>
                        <div class="single-comment comment-reply">
                            <div class="author-image">
                                <img src="{{asset('uiFix/img/blog/author-2.jpg')}}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">Nengi</a></h4>
                                    <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                    <span class="comment-time">8 Minutes Ago</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                            </div>
                        </div>
                        <div class="single-comment">
                            <div class="author-image">
                                <img src="{{asset('uiFix/img/blog/author-1.jpg')}}" alt="">
                            </div>
                            <div class="comment-text">
                                <div class="author-info">
                                    <h4><a href="#">Laycon</a></h4>
                                    <span class="reply"><a href="#"><i class="fa fa-reply"></i>Reply</a></span>
                                    <span class="comment-time">10 Minutes Ago</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled .</p>
                            </div>

                        </div>
                    </div>
                    <div class="leave-comment">
                        <h4 class="blog-title">Leave A <span>Comment</span></h4>
                        <form action="#" method="post" id="comment">
                            <div class="comment-form">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label class="required">name</label>
                                        <input type="text" name="name" value="">
                                        <label class="required">Email</label>
                                        <input type="email" name="email" value="">
                                        <label>Subject</label>
                                        <input type="text" name="subject" value="">
                                    </div>
                                    <div class="col-md-7">
                                        <label>Your Comments</label>
                                        <textarea rows="12" name="enquiry"></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="comment-btn" value="Submit comment">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
