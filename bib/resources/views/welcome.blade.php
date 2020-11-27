@extends('layouts.app')

@section('content')

    <style>
        .btn-outline-new-new-white {
            color: #fff;
            background-color: transparent;
            background-image: none;
            border-color: #fff;
        }
        .btn-outline-new-new-white:hover {
            color: #cfa671;
            background-color: #fff;
            border-color: #fff;
        }
    </style>
{{--    {{dd($menus)}}--}}
<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="{{asset('imgs/IMG_5921.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> BakedInBombay</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="{{route('show-menu')}}">Order Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('imgs/IMG_5794.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> BakedInBombay</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="{{route('show-menu')}}">Order Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('imgs/IMG_5742.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> BakedInBombay</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="{{route('show-menu')}}">Order Now</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="{{route('show-menu')}}" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="{{route('show-menu')}}" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box" data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <p align="center">
                 <img style="horiz-align: center; max-height: 400px;" src="{{asset('imgs/logo1.png')}}" alt="" class="img-fluid">
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <div class="inner-column">
                    <h1>Welcome To <span>BakedInBombay</span></h1>
                    <h4>Little Story</h4>
                    <p>Baked in Bombay comes out of a place of love for baking and love for my home city Bombay. Bombay for me is all about the community, is all about being inclusive and all about being a home. And as tradition in most Bombay homes, you can never leave your house without having some sweet.</p>
                    <p>So here is a community that embraces the culture and it's people at the same embracing flavors that are one of a kind 🌻</p>
                    <a class="btn btn-lg btn-circle btn-outline-new-white" style="margin-bottom: 20px" href="{{route('show-menu')}}">Order Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <p align="center">
                    <img style="horiz-align: center; max-height: 400px;" src="{{asset('imgs/nandini.jpeg')}}" alt="" class="img-fluid">
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start QT -->
{{--<div class="qt-box qt-background">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8 ml-auto mr-auto text-left">--}}
{{--                <p class="lead " style="text-align: center">--}}
{{--                    #ExperimentalBaking--}}
{{--                </p>--}}
{{--                <span class="lead"></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box" data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Our Specials</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".cakes">Cakes</button>
                        <button data-filter=".breads">Breads</button>
                        <button data-filter=".brownies">Brownies</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            @foreach($menus as $m)
                @if($m->item_type == 'cake')
            <div class="col-lg-4 col-md-6 special-grid cakes">

                <div class="gallery-single fix">
                    <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>{{ucwords($m->item_name)}}</h4>
                        <h5>₹ {{$m->price}}</h5>
                        <p></p>
                        <a class="btn btn-lg btn-circle btn-outline-new-new-white" href="{{route('show-menu')}}">Order Now</a>
                    </div>
                </div>
            </div>
                @endif
            @if($m->item_type == 'bread')
                <div class="col-lg-4 col-md-6 special-grid breads">

                    <div class="gallery-single fix">
                        <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>{{ucwords($m->item_name)}}</h4>
                            <h5>₹ {{$m->price}}</h5>
                            <p></p>
                            <a class="btn btn-lg btn-circle btn-outline-new-new-white" href="{{route('show-menu')}}">Order Now</a>
                        </div>
                    </div>
                </div>
                    @endif
                @if ($m->item_type == 'brownie')
                <div class="col-lg-4 col-md-6 special-grid brownies">

                    <div class="gallery-single fix">
                        <img src="{{asset('imgs/uploads/order_uploads/'. $m->image)}}" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>{{ucwords($m->item_name)}}</h4>
                            <h5>₹ {{$m->price}}</h5>
                            <p></p>
                            <a class="btn btn-lg btn-circle btn-outline-new-new-white" href="{{route('show-menu')}}">Order Now</a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

        </div>
    </div>
</div>
<!-- End Menu -->

<!-- Start Gallery -->
{{--   Scroll spy bootstrap--}}
<div class="gallery-box" data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="gallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Gallery</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_9604.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_9604.jpg')}}"  alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_9750.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_9750.jpg')}}" alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_9602.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_9602.jpg')}}" alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a class="lightbox" href="">
                        <img class="img-fluid" src="{{asset('imgs/IMG_5742.jpg')}}" alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_5709.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_5709.jpg')}}" alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_5833.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_5833.jpg')}}" alt="Gallery Images">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery -->

<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Customer Reviews</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto text-center">
                <div id="reviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item text-center active">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
                            <h6 class="text-dark m-0">Web Developer</h6>
                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
                            <h6 class="text-dark m-0">Web Designer</h6>
                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="img-box p-1 border rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
                            <h6 class="text-dark m-0">Seo Analyst</h6>
                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Customer Reviews -->
@endsection

@section('js-scripts')
<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
{{--<script src="js/bootstrap.min.js"></script>--}}
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>

@endsection
