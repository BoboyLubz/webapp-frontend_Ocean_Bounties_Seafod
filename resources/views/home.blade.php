@extends('homepage.layouts.app')
 
@section('title', 'homepage')
 
@section('content')
        @include('homepage.includes.nav')
        <!-- Masthead-->
        <header class="masthead">
        <!--
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        
                    </div>
                </div>
            </div>
        -->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                
                                <img src="assets/images/contact.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/carousel1.jpg" class="d-block w-100" alt="...">
                            </div> 
                            
                            <div class="carousel-item">
                                <img src="assets/images/carousel2.jpg" class="d-block w-100" alt="...">
                            </div> 
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
            </div>
        </header>
        <!--Announcement-->
        
        
        <!-- About-->
        
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5"> 
            <!--
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">ABOUT US</h2>
                        
                        <p class="text-white-50">
                            Ocean Bounties - Seafood Market and Restaurant is a paradisiacal and conductive marketplace restaurant which provides customers with nutritious, delicious and fresh varied seafoods.
                            <a href="https://www.facebook.com/oceanbounties/">Facebook Page.</a>
                           We also offer foodstuffs like seafood dishes, soups, salad & sandwiches and seafood pizza & steaks. This ideal tropical space is suited in J. Rosales Avenue - Butuan City Agusan del Norte.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/images/services.jpg" width="80%" />-->
                
                <div class="row gx-0 mb-4 mb-lg-5 justify-content-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/services.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4></h4>
                            <p class="text-black-50 mb-0">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
        </section> 
        <!-- About us-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/images/services.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>ABOUT US</h4>
                            <p class="text-black-50 mb-0">
                                Ocean Bounties - Seafood Market and Restaurant is a paradisiacal and conductive marketplace restaurant which provides customers with nutritious, delicious and fresh varied seafoods.
                                <a href="https://www.facebook.com/oceanbounties/">Facebook Page.</a>
                                We also offer foodstuffs like seafood dishes, soups, salad & sandwiches and seafood pizza & steaks. This ideal tropical space is suited in J. Rosales Avenue - Butuan City Agusan del Norte.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Menu-->
        <section class="menu-section text-center" id="menu">
            <div class="container px-4 px-lg-5">
                <div class="featured-text text-center">
                    <h4> OUR MENU</h4>
                    <!-- Carousel wrapper -->
                    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-bs-ride="carousel" data-bs-interval="3000" data-bs-items="3"> <!--carouselMultiItemExample  data-mdb-items="3"   -->
                        <!-- Controls -->
                        <!-- Inner -->
                        <div class="carousel-inner py-4">
                            <!-- Single item -->
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <img src="assets/images/baked-scallops.jpg" class="card-img-top img-fluid d-block m-x-auto">
                                                <div class="card-body">
                                                    <h5 class="card-title">Baked-Scallops</h5>
                                                        <p class="card-text">
                                                            PHP 275
                                                        </p>
                                                        <a href="#!" class="btn btn-primary">Order Now!</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="card">
                                                <img src="assets/images/lubster.jpg" class="card-img-top img-fluid d-block m-x-auto">
                                                <div class="card-body">
                                                    <h5 class="card-title">Lubster garlic chilli</h5>
                                                    <p class="card-text">
                                                        PHP 180
                                                    </p>
                                                    <a href="#!" class="btn btn-primary">Order Now!</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="card">
                                                <img src="assets/images/octupos-suite.jpg" class="card-img-top img-fluid d-block m-x-auto">
                                                <div class="card-body">
                                                    <h5 class="card-title">Octupos-Suite</h5>
                                                    <p class="card-text">
                                                        PHP 200
                                                    </p>
                                                    <a href="#!" class="btn btn-primary">Order Now!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="card">
                                                <img src="assets/images/lumi.jpg" class="card-img-top img-fluid d-block m-x-auto">
                                                <div class="card-body">
                                                    <h5 class="card-title">Lumi</h5>
                                                    <p class="card-text">
                                                        PHP 220
                                                    </p>
                                                    <a href="#!" class="btn btn-primary">Order Now!</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="card">
                                                <img src="assets/images/octupos-suite.jpg" class="card-img-top img-fluid d-block m-x-auto">
                                                <div class="card-body">
                                                    <h5 class="card-title">Octupos-suite</h5>
                                                    <p class="card-text">
                                                        PHP 200
                                                    </p>
                                                    <a href="#!" class="btn btn-primary">Order Now!</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="card">
                                                <img src="assets/images/sauted-abalone.jpg" class="card-img-top img-fluid d-block m-x-auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Suited-abalone</h5>
                                                <p class="card-text">
                                                    PHP 320
                                                </p>
                                                <a href="#!" class="btn btn-primary">Order Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        </div>
                        <!-- Inner -->
                        <!--Control-->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="prev"> <!-- tabindex="0" data-mdb-slide="prev" -->
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    </div>
                    <!-- Carousel wrapper -->
                </div>
            </div>
        </section>
        <!--End Menu-->
        <!--Gallery-->
        <section class="gallery-section text-center" id="gallery">
            <div class="container px-4 px-lg-5">
                <!-- Gallery -->
                <div class="lightbox">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="assets/images/bg-head.jpg" data-bs-img="assets/images/bg-head.jpg" class="w-100 shadow-1-strong rounded mb-4">

                            <img src="assets/images/carousel1.jpg" data-bs-img="assets/images/carousel1.jpg" class="w-100 shadow-1-strong rounded mb-4">
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="assets/images/carousel2.jpg" data-bs-img="assets/images/carousel2.jpg" class="w-100 shadow-1-strong rounded mb-4">

                            <img src="assets/images/contact.jpg" data-bs-img="assets/images/contact.jpg" class="w-100 shadow-1-strong rounded mb-4">
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="assets/images/menus.jpg" data-bs-img="assets/images/menus.jpg" class="w-100 shadow-1-strong rounded mb-4">

                            <img src="assets/images/services.jpg" data-bs-img="assets/images/services.jpg" class="w-100 shadow-1-strong rounded mb-4">
                        </div>
                    </div>
                </div>
                <!-- Gallery -->
            </div>
        </section>
        <!--End Gallery-->
        <!--Map-->
        <section class="map-section bg-info-subtle text-center" id="map">
            
            <div class="bg-info contact4 overflow-hidden position-relative">
                <div class="row no-gutters">
                    <div class="container">
                        <div class="col-lg-6 contact-box mb-4 mb-md-0">
                            <div class="">
                                <h1 class="title font-weight-light text-white mt-3">Message Us</h1>
                                <form class="mt-3">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input class="form-control text-white" type="text" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input class="form-control text-white" type="text" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input class="form-control text-white" type="email" placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <textarea class="form-control text-white" rows="3" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex align-items-center mt-2">
                                            <button type="submit" class="btn bg-white text-inverse px-3 py-2 inline-block"><span> Submit</span></button>
                                            <!--<span class="ml-auto text-white align-self-center"><i class="icon-phone mr-2"></i>251 546 9442</span>--> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 right-image p-r-0">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ocean Bounties Seafood Restaurant&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf">Pdf</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:600px;}.gmap_iframe {width:600px!important;height:600px!important;}</style></div>
                    </div>
                </div>
            </div> 
            <!--
            <h3 class="mb-5">Contact us</h3>

            <div class="row">
                <div class="col-lg-5">
                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ocean Bounties Seafood Restaurant&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf">Pdf</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:600px;}.gmap_iframe {width:600px!important;height:600px!important;}</style></div>
                </div>

                <div class="col-lg-7">
                    <form>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" />
                                            <label class="form-label" for="form3Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-outline">
                                            <input type="email" id="form3Example2" class="form-control" />
                                            <label class="form-label" for="form3Example2">Email Address</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example3" class="form-control" />
                                        <label class="form-label" for="form3Example3">Subject</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                        <label class="form-label" for="form4Example3">Message</label>
                                    </div>
                                    <div class="text-center text-md-start">
                                        <button type="submit" class="btn btn-primary mb-5 mb-md-0">
                                            Send
                                        </button>
                                    </div>
                                
                                <div class="col-md-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                            <p><small>New York, NY 10012, USA</small></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-phone fa-2x text-primary"></i>
                                            <p><small>+ 01 234 567 89</small></p>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope fa-2x text-primary"></i>
                                            <p><small>contact@gmail.com</small></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div> -->
        </section>
       
        <!-- Contact-->
        <section class="contact-section bg-pink">
            
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2" style="font-size: 50px;"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">J. Rosales Avenue - Butuan City Agusan del Norte</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2" style="font-size: 50px;"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">oceanbountiesseafood@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2" style="font-size: 50px;"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">mobile: (09633107002)</div>
                                <div class="small text-black-50">tel: (09633107002)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div> -->
            </div>
        </section>

@endsection