    
{{-- //header --}}
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
                            <h1 class="display-4 text-white mb-3">Tour Tracker</h1>
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
                            <h1 class="display-4 text-white mb-3">Why us</h1>
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
                <h2>About Us</h2>
            </div>    
            <div class="row pb-3">
                <div class="col-md-12">
                    <div class=" product-card">
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
                    </div>                                               
                </div>  
                           
            </div>
        </div>
    </section>

    <section class="section-3">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
            </div>           
            <div class="row pb-3">
                <div class="col-lg-3">
                    <a href="{{ route('front.Hotel.HotelPage') }}">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{asset('front-assets/images/Hotels.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2 class="text-black">Hotel</h2>
                                    {{-- <p>100 Products</p> --}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('front.Transport.Page')}}">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{asset('front-assets/images/Transport.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2 class="text-black">Transport</h2>
                                    {{-- <p>100 Products</p> --}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('front.Tour.package')}}">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{asset('front-assets/images/tour Package.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2 class="text-black">Tour Package</h2>
                                    {{-- <p>100 Products</p> --}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('front.tour')}}">
                     <div class="cat-card">
                         <div class="left">
                             <img src="{{asset('front-assets/images/Tour Guide.jpg')}}" alt="" class="img-fluid">
                         </div>
                         <div class="right">
                             <div class="cat-data">
                             <h2 class="text-black">Tour Guide</h2>
                                 {{-- <p>100 Products</p --}}
                             </div>
                         </div>
                     </div>
                    </a>
                 </div>
                <div class="col-lg-3">
                    <a href="{{route('front.commerce.home')}}">
                        <div class="cat-card">
                            <div class="left">
                                <img src="{{asset('front-assets/images/E-Commerce.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2 class="text-black">E-commerces</h2>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                

            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">Quality Product</h5>
                    </div>                    
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">Free Shipping</h2>
                    </div>                    
                </div>
                <div class="col-lg-3">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">14-Day Return</h2>
                    </div>                    
                </div>
                <div class="col-lg-3 ">
                    <div class="box shadow-lg">
                        <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                        <h2 class="font-weight-semi-bold m-0">24/7 Support</h5>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-4 pt-5">
        <div class="container">
            <div class="section-title">
                <h2>Featured Produsts</h2>
            </div>    
            <div class="row pb-3">
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-1.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="{{route('front.commerce.Productpage')}}">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="{{route('front.commerce.Productpage')}}">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-2.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                {{-- <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-3.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-4.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-5.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-1.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-7.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>  
                <div class="col-md-3">
                    <div class="card product-card">
                        <div class="product-image position-relative">
                            <a href="" class="product-img"><img class="card-img-top" src="{{asset('front-assets/images/product-8.jpg')}}" alt=""></a>
                            <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                            <div class="product-action">
                                <a class="btn btn-dark" href="#">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>                            
                            </div>
                        </div>                        
                        <div class="card-body text-center mt-3">
                            <a class="h6 link" href="product.php">Dummy Product Title</a>
                            <div class="price mt-2">
                                <span class="h5"><strong>$100</strong></span>
                                <span class="h6 text-underline"><del>$120</del></span>
                            </div>
                        </div>                        
                    </div>                                               
                </div>                --}}
            </div>
        </div>
    </section>

    <section class="section-5 ">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>    
            <div class="container">
                <div class="row mx-auto">
                      <div class="col-md-6 mb-3">
                        <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="name" class="form-control" id="firstname">
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="name" class="form-control" id="lastname">
                        </div>
                      </div>
        
                      <div class="col-12 col-md-6 mb-3">
                        <label for="number" class="col-sm-2 col-form-label">Phonenum</label>
                        <div class="col-sm-10">
                          <input type="name" class="form-control" id="number">
                        </div>
                      </div>
        
                      <div class="col-12 col-md-6 mb-3">
                        <label for="city" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                          <input type="name" class="form-control" id="city">
                        </div>
                      </div>

                      <div class="col-12 col-md-6 mb-3">
                        <label for="exampleFormControlInput1" class="form-label label">Email address</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control"  id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-3">
                        <label for="userquery" class="form-label label">Purpase</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="userquery" name="userquery" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="mx-auto btn btn-primary">Submit</button>
                      </div>
        
                  </div>
                  
                </div>
        </div>
    </section>
    
</main>
    
@endsection

{{-- 
@extends('front.layouts.footer') --}}

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>


