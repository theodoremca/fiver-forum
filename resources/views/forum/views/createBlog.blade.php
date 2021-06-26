@extends('layouts.app')

@section('content')

    <div class="banner-area signin-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <div class="title-border">
                            <h1>Create Blog<span> page</span></h1>
                        </div>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui<br> id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Create</a></li>
                        <li>Blo</li>
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
                                        <form action="https://designermachinefonts.net/dm/html/adventure/adventures/mail.php" method="post">
                                            <div class="row">
                                                <a href="#"></a>
                                                <div class="col-md-12">
                                                    <label  class="submit-button container text-center" for="blogPicture">
                                                    <img src="{{asset('uiFix/img/blog/add.jpg')}}" alt="">
                                                    </label>

                                                </div>
                                                <div class="col-md-12">
                                                    <input name="f_name" id="blogPicture" type="file" class="form-box" placeholder="First name" style="display: none">


                                                </div>
                                                <div class="col-md-12">
                                                    <input name="l_name" type="text" class="form-box" placeholder="Title">
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea name="message" class="yourmessage" placeholder="body"></textarea>
                                                    <input type="submit" value="post" class="submit-button">
                                                </div>
                                            </div>
                                        </form>
                                    </div>





            </div>
        </div>
    </div>





@endsection

