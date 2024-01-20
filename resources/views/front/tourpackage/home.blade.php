@extends('front.layouts.app')
@section('content')
    <main>
        <section class="section-1">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="images/carousel-1.jpg" class="d-block w-100" alt=""> -->
    
                        <picture>
                            <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/carousel-1-m.jpg')}}" />
                            <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/recreation.jpg')}}" />
                            <img src="{{asset('front-assets/images/recreation.jpg')}}" alt="" />
                        </picture>
    
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Tour Tracker Package's</h1>
                                <p class="mx-md-5 px-5">
    
                                At Tour Tracker, we're more than just a travel agency - we're your trusted travel companion. With a passion for exploration and a commitment to convenience, we offer a comprehensive suite of services to make your journey memorable.</p>
    
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/carousel-2-m.jpg')}}" />
                            <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/Homepage1.jpg')}}" />
                            <img src="{{asset('front-assets/images/Homepage1.jpg')}}" alt="" />
                        </picture>
    
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">About's our Package</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> -->
                        <picture>
                            <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/carousel-3-m.jpg')}}" />
                            <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/productshome.jpg')}}" />
                            <img src="{{asset('front-assets/images/productshome.jpg')}}" alt="" />
                        </picture>
    
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Shop Online at Flat 70% off on our products</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">
                <div class="section-title">
                    <h2>About Packages</h2>
                </div>    
                <div class="row pb-3">
                    <div class="col-md-12">
                        {{-- <div class=" product-card"> --}}
                            <div class="product-image position-relative">
                            </div>                        
                            <div class="card-body text-center mt-3">
                                <div class="mt-2">
                                    <span>
                                         Discover seamless travel at Tour Tracker. We bring together hotels, transport, recreation, attractions, tours, and an E-Commerce marketplace. With real-time updates and stringent security, plan your unique journey effortlessly.
                                         Tour Tracker goes beyond, offering a comprehensive solution for a personalized travel experience. Your adventure begins here!
                                    </span>
                                </div>
                            </div>                        
                        {{-- </div>                                                --}}
                    </div>  
                               
                </div>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">   
                <div class="section-titles">
                    <h2>Package's</h2>
                </div>
                <div class="row pb-3">
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/Hotels.jpg')}}" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            
    
                                <div class="product-action">
                                    <a class="btn btn-dark" href="#">
                                        <i class="fa fa-hotel"></i>Book Me
                                    </a>                            
                                </div>
                            </div>                        
                            <div class="card-body text-center mt-3">
                                <div class="mb-2"><a class="h3 link" href="product.php">4 Days trip in Sawat</a></div>
                                <a class="h6 link" href="product.php">For 2 Person</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>Rs 14000  </strong></span>
                                    <span class="h6 text-underline"><del>Rs 16000 </del></span>
                                </div>
                            </div>                        
                        </div>                                               
                    </div>  
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="{{route('front.Tour.detail')}}" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/Hotels.jpg')}}" alt=""></a>
                                <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            
    
                                <div class="product-action">
                                    <a class="btn btn-dark" href="{{route('front.Tour.detail')}}">
                                        <i class="fa fa-hotel"></i> Book Me
                                    </a>                            
                                </div>
                            </div>                        
                            <div class="card-body text-center mt-3">
                                <div class="mb-2"><a class="h3 link" href="product.php"> 7 Days trip in kashmir</a></div>
                                <a class="h6 link" href="{{route('front.Tour.detail')}}">For 2 Person</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>Rs 18000 </strong></span>
                                    <span class="h6 text-underline"><del>Rs 20000 </del></span>
                                </div>
                            </div>                        
                        </div>                                               
                    </div>            
                </div>
            </div>
        </section>
    </main>
@endsection