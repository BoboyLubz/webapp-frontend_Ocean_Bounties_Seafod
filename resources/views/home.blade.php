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
        </header>
        <!--Announcement-->
        
        <section class="announcement-section" id="announcement">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <!--Announcement Carousel -->
                    <!--
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        
                        <ol class="carousel-indicators">
                            @/foreach ($announcements as $announcement)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{/{ $loop->index }}" class="{/{ $loop->first ? 'active' : '' }}"></li>
                            @/endforeach
                        </ol> 

                        <div class="carousel-inner" role="listbox">
                            @/foreach ($announcements as $announcement)
                                <div class="carousel-item {/{ $loop->first ? 'active' : '' }}">
                                    <img class="d-block img-fluid" src="{/{ $announcement->image }}" alt="{/{ $announcement->name }}">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>{/{ $announcement->name}}</h3>
                                            <h3>{/{ $announcement->price}}</h3>
                                            <p>{/{ $announcement->description }}</p>
                                        </div>
                                </div>
                            @/endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> -->
                    
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                
                                <img src="assets/images/menus.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/services.jpg" class="d-block w-100" alt="...">
                            </div> 
                            
                            <div class="carousel-item">
                                <img src="assets/images/shrimp-tempura.jpg" class="d-block w-100" alt="...">
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
                    
                    <!--
                    <div class="multi-carousel" data-mdb-interval="3000" data-mdb-items="5">
                        <div class="d-flex justify-content-center m-2 mb-3">
                            <button class="carousel-control-prev btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="prev">
                                <i class="fas fa-angle-left fa-lg"></i>
                            </button>
                            <button class="carousel-control-next btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="next">
                                <i class="fas fa-angle-right fa-lg"></i>
                            </button>
                        </div>
                        <div class="multi-carousel-inner">
                            <div class="multi-carousel-item">
                                <div class="card m-2">
                                    <img class="card-img-top" src="assets/images/menus.jpg" alt="Card image cap" />
                                    <div class="card-body">
                                        <h5 class="card-titles">Moda</h5>
                                        <p class="card-texts">Plan B</p>
                                        <ul class="list-unstyled list-inline my-2">
                                            <li class="list-inline-items mx-0"><i class="fas fa-star"></i></li>
                                            <li class="list-inline-items mx-0"><i class="fas fa-star"></i></li>
                                            <li class="list-inline-items mx-0"><i class="fas fa-star"></i></li>
                                            <li class="list-inline-items mx-0"><i class="fas fa-star"></i></li>
                                            <li class="list-inline-items mx-0"><i class="fas fa-star-half-alt"></i></li>
                                        </ul>
                                        <p class="price mb-0">9,99 $</p>
                                    </div>
                                </div>
                            </div>
                            
                            -->
                </div>
            </div>
        </section>
        <!--End of Announcement "--> 
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
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
                <img class="img-fluid" src="assets/images/services.jpg" width="80%" />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Shoreline</h4>
                            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Misty</h4>
                                    <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Map-->
        <section class="map-section bg-info-subtle" id="map">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">                   
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ocean Bounties Seafood Restaurant&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf">Pdf</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:600px;}.gmap_iframe {width:600px!important;height:600px!important;}</style></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Send Us a Message!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <!--
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col"><input class="form-control" id="fullname" type="text" placeholder="Enter fullname..." aria-label="Enter fullname..." data-sb-validations="required,name" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div> -->
                             <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required"/>
                                <label for="name">Full Name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email Address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone Number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                            <div class="d-grid"><button class="btn btn-success btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
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