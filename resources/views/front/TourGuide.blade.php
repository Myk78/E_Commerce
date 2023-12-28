@extends('front.layouts.app')


@section('content')
 <section class="section-1">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img src="images/carousel-1.jpg" class="d-block w-100" alt=""> -->

                <picture>
                    <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/Tattractionmain1.jpg')}}" />
                    <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/Tattractionmain1.jpg')}}" />
                    <img src="{{asset('front-assets/images/Tattractionmain1.jpg')}}" alt="" />
                </picture>

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3">
                        <h1 class="display-4 text-white mb-3">Swat</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/Tattraction4.jpg')}}" />
                    <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/Tattraction4.jpg')}}" />
                    <img src="{{asset('front-assets/images/Tattraction4.jpg')}}" alt="" />
                </picture>

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3">
                        <h1 class="display-4 text-white mb-3">Naran</h1>  
                      </div>
                </div>
            </div>
            <div class="carousel-item">
                <!-- <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> -->
                <picture>
                    <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/naraan.jpg')}}" />
                    <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/naraan.jpg')}}" />
                    <img src="{{asset('front-assets/images/naraan.jpg')}}" alt="" />
                </picture>

                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3">
                        <h1 class="display-4 text-white mb-3">SiriPai</h1> 
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


<section class="section-3">
    <div class="container">
        <div class="section-title mt-3">
            <h2>Tourist Attraction Point</h2>
        </div>           
        <div class="row pb-3">
            <div class="col-lg-3">
                <a href="{{route('front.TourGuide.kpk')}}">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/hotel.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2 class="text-black">KPK</h2>
                                {{-- <p>100 Products</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/Transport.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2 class="text-black">Kashmir</h2>
                                {{-- <p>100 Products</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/package.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2 class="text-black">Gilgit</h2>
                                {{-- <p>100 Products</p> --}}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                 <div class="cat-card">
                     <div class="left">
                         <img src="{{asset('front-assets/images/Touristattract.jpg')}}" alt="" class="img-fluid">
                     </div>
                     <div class="right">
                         <div class="cat-data">
                         <h2 >Punjab</h2>
                             {{-- <p>100 Products</p> --}}
                         </div>
                     </div>
                 </div>
                </a>
             </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/mizarequaid.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2 class="text-black">Sindh</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="#">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/naraan.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2 class="text-black">Blochistan</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            

        </div>
    </div>
</section>   
@endsection


{{-- @include('front.layouts.footer') --}}



