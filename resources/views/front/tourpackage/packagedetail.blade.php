@extends('front.layouts.app')
@section('content')
    <main>
        <main>
            <section class="section-5 pt-3 pb-3 mb-3 bg-white">
                <div class="container">
                    <div class="light-font">
                        <ol class="breadcrumb primary-color mb-0">
                            <li class="breadcrumb-item"><a class="white-text" href="{{route('front.Hotel.HotelPage')}}">Package name</a></li>
                            <li class="breadcrumb-item">4 Days Kashmir
                                
                            </li>
                        </ol>
                    </div>
                </div>
            </section>
        
            <section class="section-7 pt-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-5">
                            <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner bg-light">
                                    <div class="carousel-item">
                                        <img class="w-100 h-100" src="{{asset('front-assets/images/Hotels.jpg')}}" alt="Image">
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="w-100 h-100" src="{{asset('front-assets/images/Transport.jpg')}}" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100 h-100" src="{{asset('front-assets/images/Tour Guide.jpg')}}" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100 h-100" src="{{asset('Ecomfront-assets/images/product-4.jpg')}}" alt="Image">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#product-carousel" data-bs-slide="prev">
                                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                                </a>
                                <a class="carousel-control-next" href="#product-carousel" data-bs-slide="next">
                                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="bg-light right">
                                <h1>4 days kashmir trip</h1>
                                <div class="linespace">
                                    <label class="mx-2 mb-2 front fs-4"><b> Night:</b></label> <label class="fs-5"># night's</label>
                                  </div>
                                  <div class="linespace">
                                    <label class="mx-2 mb-2 front fs-4"><b>Location:</b></label> <label class="fs-5">Near arrang khel</label>
                                  </div>
                                  <div class="linespace">
                                    <label class="mx-2 mb-2 front fs-4"><b>Roon type</b></label> <label class="fs-5">deluxe:</label>
                                  </div>
                                  <div class="linespace">
                                    <label class="mx-2 mb-2 front fs-4"><b>Description:</b></label> <label class="fs-5"><p>The average elevation of Swat is 980 m (3,220 ft), resulting in a considerably cooler and wetter climate compared to the rest of Pakistan. With lush forests, verdant alpine meadows, and snow-capped mountains, Swat is one of the country's most popular tourist destinations.</p></label>
                                  </div>
                                <div class="d-flex mb-3">
                                    <div class="text-primary mr-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star-half-alt"></small>
                                        <small class="far fa-star"></small>
                                    </div>
                                    <small class="pt-1">(99 Reviews)</small>
                                </div>
                                
                            </div>
                            {{-- <div class="linespace">
                                <label class="mx-2"><b>Name</b></label> PC Hotel
                              </div>

                            <div class="linespace">
                                <label class="mx-2"><b>Description</b></label> PC Hotel
                              </div>
                              <div class="linespace">
                                <label class="mx-2"><b>Address</b></label
                                >StreeT 17, House #0789 b-17,islamabad
                              </div> --}}
                        </div>
                        <div class="col-md-12 pt-2 mt-5 border bg-white">
                            <p class=" align-middle">
                                <svg class="bk-icon -streamline-credit_card_crossed  mx-2" height="30" role="presentation" width="30" viewBox="0 0 128 128" aria-hidden="true" focusable="false"><path d="M88.72 108a4 4 0 0 1-4 4H12c-6.627 0-12-5.373-12-12V28a4 4 0 0 1 8 0v12h12.11a4 4 0 0 1 0 8H8v52a4 4 0 0 0 4 4h72.72a4 4 0 0 1 4 4zM116 16H43.1a4 4 0 0 0 0 8H116a4 4 0 0 1 4 4v12H66.86a4 4 0 0 0 0 8H120v52a4 4 0 0 0 8 0V28c0-6.627-5.373-12-12-12zM44.3 64H28a4 4 0 0 0 0 8h16.3a4 4 0 0 0 0-8zM24 84a4 4 0 0 0 4 4h29.88a4 4 0 0 0 0-8H28a4 4 0 0 0-4 4zM6.83 1.17a4.002 4.002 0 1 0-5.66 5.66l120 120a4.002 4.002 0 1 0 5.66-5.66z"></path></svg>
                                <b>No credit card needed to book.</b> We'll send you an email confirming your reservation.
                            </p>
                        </div>
                        {{-- <div class="container">
                            <div class="row mt-5">
                                <div class="col-6 bg-primary text-primary">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1653.4440396125638!2d73.4162715444275!3d34.02108370000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfd572a890f097%3A0x3e8404379d53d6f5!2sSwat%20Hotel!5e0!3m2!1sen!2s!4v1703931656102!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                
                                <div class="col-6">
                                    <h3 class="section-title my-2"><b>Hotel surroundings</b></h3>
                                    <h5><i class="fa-solid fa-person-walking mx-2 text-primary"></i><b>What's nearby</b></h5>
                                    <p class="mb-1">
                                        <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Toilet Paper<br>
                                        <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels<br>
                                        <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels/sheets<br>
                                        <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Shower<br>
                                        <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Slippers
                                    </p>
                                    
        
                                </div>
                            </div>
                        </div>                     --}}
                    </div>           
                </div>
    </section>

            
            

  <section>
                <div class="container table">

                    <div class=" my-4 text-center">
                        <h2><b>What include in trip</b></h2>
                    </div> 
                    <div class="row">
                        <div class="col-6">
                            <h3 class="section-title my-2"><b>Facilities of Hotel</b></h3>
                            <h4 class="">Most popular facilities</h4>
                            <div class="product-action mx-2">
                                
                                    <i class="fa fa-wifi mx-2 text-primary"></i> Wifi
                                    <i class="fa-solid fa-people-group mx-2 text-primary"></i> Family room
                                    <i class="fas fa-parking mx-2 text-primary"></i> Free Parking   
                                    <i class="fas fa-parking mx-2 text-primary"></i> Good Breakfast                        
                            </div>
                            <h5><i class="fa-solid fa-bath mx-2 text-primary"></i></i><b>Bathroom</b></h5>
                            <p class="mb-1">
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Toilet Paper<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels/sheets<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Shower<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Slippers
                            </p>
                            <h5><i class="fa-solid fa-bed mx-2 text-primary"></i><b>Bedroom</b></h5>
                            <p class="mb-1">
                                <i class="fa-solid fa-check fa-lg mx-2" style="color: #24375b;"></i>Linen<br>
                                <i class="fa-solid fa-check fa-lg mx-2" style="color: #24375b;"></i>Wardrobe or closet<br>
                            </p>


                        </div>
                        <div class="col-6">
                            <h3 class="section-title my-2"><b>Hotel surroundings</b></h3>
                            <h5><i class="fa-solid fa-person-walking mx-2 text-primary"></i><b>What's nearby</b></h5>
                            <p class="mb-1">
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Toilet Paper<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels/sheets<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Shower<br>
                                <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Slippers
                            </p>
                            

                        </div>
                    </div>
                </div>
</section>
 <section class="section-5 ">
                <div class="container  table">
                    <div class="my-4 text-center">
                        <h2><i class="fa-solid fa-book text-primary"></i><b>Booking form</b></h2>
                    </div>    
                    <div class="container">
                        <div class="row mx-auto">
                              <div class="col-md-6 mb-3">
                                    <label for="Cusname" class="col-sm-2 col-form-label ">First Name</label>
                                    <div class="col-sm-10">
                                    <input type="name" class="form-control" id="Cusname">
                                    </div>  
                              </div>
                              <div class="col-12 col-md-6 mb-3">
                                <label for="pnum" class="col-sm-2 col-form-label">SelectPackage</label>
                                <div class="col-sm-10">                                   
                                    <select name="status" id="Rtype" class="form-control">
                                        <option value="1">Kashmir 4 day trip</option>
                                        <option value="0">sawat 2 day trip</option>
                                    </select>
                                </div>
                            </div>
                              <div class="col-12 col-md-6 mb-3">
                                <label for="cnic" class="col-sm-2 col-form-label">Cnic</label>
                                <div class="col-sm-10">
                                  <input type="name" class="form-control" id="cnic">
                                </div>
                              </div>
                              <div class="col-12 col-md-6 mb-3">
                                <label for="cnicimage" class="col-sm-2 col-form-label">Cnic</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="cnicimage">
                                </div>
                              </div>
                
                              <div class="col-12 col-md-6 mb-3">
                                <label for="pnum" class="col-sm-2 col-form-label">Phonenum</label>
                                <div class="col-sm-10">
                                  <input type="name" class="form-control" id="pnum">
                                </div>
                              </div>                        
        
                              <div class="col-12 col-md-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label label">Email address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control"  id="exampleFormControlInput1" placeholder="name@example.com">
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