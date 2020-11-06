<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>BakedInBombay</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" href="{{asset('./images/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
{{--                <img src="{{asset('images/logo.png')}}" style="max-height: 60px; max-width: 60px;" alt="" />--}}
                <span style="color: #906636; font-size: 25px; font-weight: bold">BakedInBombay</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="#">Order Now</a>
                            <a class="dropdown-item" href="#">Stuff</a>
                            <a class="dropdown-item" href="#">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">blog</a>
                            <a class="dropdown-item" href="blog-details.html">blog Single</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->

<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="{{asset('imgs/IMG_9750.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> BakedInBombay</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('imgs/IMG_9604.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> BakedInBombay</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order Now</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('imgs/IMG_9602.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> BakedInBombay</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order Now</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p align="center">
                 <img style="horiz-align: center; max-height: 400px;" src="{{asset('imgs/nandini.jpeg')}}" alt="" class="img-fluid">
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                    <h1>Welcome To <span>BakedInBombay</span></h1>
                    <h4>Little Story</h4>
                    <p>Baked in Bombay comes out of a place of love for baking and love for my home city Bombay. Bombay for me is all about the community, is all about being inclusive and all about being a home. And as tradition in most Bombay homes, you can never leave your house without having some sweet.</p>
                    <p>So here is a community that embraces the culture and it's people at the same embracing flavors that are one of a kind 🌻</p>
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-left">
                <p class="lead " style="text-align: center">
                    #ExperimentalBaking
                </p>
                <span class="lead"></span>
            </div>
        </div>
    </div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">
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
            <div class="col-lg-4 col-md-6 special-grid cakes">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/cake.png')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Blueberry Cheesecake</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid cakes">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/IMG_9604.jpg')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Lotus Biscoff Cake</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid cakes">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/IMG_9745.jpg')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Piña Colada Cake</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $10.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid breads">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/IMG_9748.jpg')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Wolnut Banana Bread</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $15.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid breads">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/bib1.png')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Tea Cake</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $18.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid breads">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/IMG_9749.jpg')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Banana Bread</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $20.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid brownies">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/brownie.png')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Nutella Cheesecake Brownie Cake</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $25.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid brownies">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/IMG_9602.jpg')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Brownie</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $22.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid brownies">
                <div class="gallery-single fix">
                    <img src="{{asset('imgs/IMG_9598.jpg')}}" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Cakey Brownie</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $24.79</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Menu -->

<!-- Start Gallery -->
<div class="gallery-box">
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
                    <a class="lightbox" href="{{asset('imgs/IMG_5921.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_5921.jpg')}}"  alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_6023.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_6023.jpg')}}" alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_5794.jpg')}}">
                        <img class="img-fluid" src="{{asset('imgs/IMG_5794.jpg')}}" alt="Gallery Images">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <a class="lightbox" href="{{asset('imgs/IMG_5742.jpg')}}">
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

<!-- Start Contact info -->
<div class="contact-imfo-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-volume-control-phone"></i>
                <div class="overflow-hidden">
                    <h4>Phone</h4>
                    <p class="lead">
                        +91 76669 98477
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-envelope"></i>
                <div class="overflow-hidden">
                    <h4>Email</h4>
                    <p class="lead">
                        bakedinbombay@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-marker"></i>
                <div class="overflow-hidden">
                    <h4>Location</h4>
                    <p class="lead">
                        Balaram Babu Khedekar Marg, Ram nagar, Wadala West, Wadala, Mumbai, Maharashtra 400031
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact info -->

<!-- Start Footer -->
<footer class="footer-area bg-f">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3>About Us</h3>
                <p>The idea of Baked in Bombay is to create a community that is willing to try different flavours and to share my take on some classics, too! In monetary terms, it's a #PayWhatYouWant model.</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Opening hours</h3>
                <p><span class="text-color">Monday: </span>Closed</p>
                <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Contact information</h3>
                <p class="lead">Balaram Babu Khedekar Marg, Ram nagar, Wadala West, Wadala, Mumbai, Maharashtra 400031</p>
                <p class="lead"><a href="tel:7666998477">+91 76669 98477</a></p>
                <p><a href="mailto:bakedinbombay@gmail.com?subject=subject"> bakedinbombay@gmail.com</a></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3>Subscribe</h3>
                <div class="subscribe_form">
                    <form class="subscribe_form">
                        <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
                        <button type="submit" class="submit">SUBSCRIBE</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <ul class="list-inline f-social">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">BakedInBombay</a> Design By :
                        <a href="https://html.design/">PSSK</a></p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
