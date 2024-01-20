
@section('content')
<section class="section-7 pt-3 mb-3">
    <div class="col-md-12 pt-2 mt-5 border bg-white">
        <p class=" align-middle">
            <svg class="bk-icon -streamline-credit_card_crossed  mx-2" height="30" role="presentation" width="30" viewBox="0 0 128 128" aria-hidden="true" focusable="false"><path d="M88.72 108a4 4 0 0 1-4 4H12c-6.627 0-12-5.373-12-12V28a4 4 0 0 1 8 0v12h12.11a4 4 0 0 1 0 8H8v52a4 4 0 0 0 4 4h72.72a4 4 0 0 1 4 4zM116 16H43.1a4 4 0 0 0 0 8H116a4 4 0 0 1 4 4v12H66.86a4 4 0 0 0 0 8H120v52a4 4 0 0 0 8 0V28c0-6.627-5.373-12-12-12zM44.3 64H28a4 4 0 0 0 0 8h16.3a4 4 0 0 0 0-8zM24 84a4 4 0 0 0 4 4h29.88a4 4 0 0 0 0-8H28a4 4 0 0 0-4 4zM6.83 1.17a4.002 4.002 0 1 0-5.66 5.66l120 120a4.002 4.002 0 1 0 5.66-5.66z"></path></svg>
            <b>No credit card needed to book.</b> We'll send you an email confirming your reservation.
        </p>
    </div>
</section>


<section>
    <div class="container table">

        <div class=" my-4 text-center">
            <h2><b>Hotel Rule's</b></h2>
        </div> 
        <div class="row">
            <div class="col-6">
                <h3 class="section-title my-2"><b>Facilities of Hotel</b></h3>
                <h4 class="">Most popular facilities</h4>
                <div class="product-action mx-2">
                    
                        <i class="fa fa-wifi mx-2"></i> Wifi
                        <i class="fa-solid fa-people-group mx-2"></i> Family room
                        <i class="fas fa-parking mx-2"></i> Free Parking   
                        <i class="fas fa-parking mx-2"></i> Good Breakfast                        
                </div>
                <h5><i class="fa-solid fa-bath mx-2"></i></i><b>Bathroom</b></h5>
                <p class="mb-1">
                    <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Toilet Paper<br>
                    <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels<br>
                    <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Towels/sheets<br>
                    <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Shower<br>
                    <i class="fa-solid fa-hand-point-right fa-sm mx-2" style="color: #9aa6bc;"></i>Slippers
                </p>
                <h5><i class="fa-solid fa-bed mx-2"></i><b>Bedroom</b></h5>
                <p class="mb-1">
                    <i class="fa-solid fa-check fa-lg mx-2" style="color: #24375b;"></i>Linen<br>
                    <i class="fa-solid fa-check fa-lg mx-2" style="color: #24375b;"></i>Wardrobe or closet<br>
                </p>


            </div>
            <div class="col-6">
                <h3 class="section-title my-2"><b>Hotel surroundings</b></h3>
                <h5><i class="fa-solid fa-person-walking mx-2"></i><b>What's nearby</b></h5>
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
            <h2><i class="fa-solid fa-book"></i><b>Booking form</b></h2>
            <hr>
        </div>    
        <div class="container">
            <div class="row mx-auto">
                  <div class="col-md-6 mb-3">
                    <label for="Cusname" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="Cusname">
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
                    <label for="pnum" class="col-sm-2 col-form-label">Room Type</label>
                    <div class="col-sm-10">                                   <select name="status" id="Rtype" class="form-control">
                            <option value="1">Simple</option>
                            <option value="0">Bussiness</option>
                            <option value="0">Deluxe</option>
                        </select>
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
<section class="pt-5 section-8">
    <div class="container">
        <div class="section-title">
            <h2>Related Products</h2>
        </div> 
        <div class="col-md-12">
            <div id="related-products" class="carousel">
                <div class="card product-card">
                    <div class="product-image position-relative">
                        <a href="" class="product-img"><img class="card-img-top" src="{{asset('Ecomfront-assets/images/product-4.jpg')}}" alt=""></a>
                        <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                        <div class="product-action">
                            <a class="btn btn-dark" href="#">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </a>                            
                        </div>
                    </div>                        
                    <div class="card-body text-center mt-3">
                        <a class="h6 link" href="">Dummy Product Title</a>
                        <div class="price mt-2">
                            <span class="h5"><strong>$100</strong></span>
                            <span class="h6 text-underline"><del>$120</del></span>
                        </div>
                    </div>                        
                </div> 
                <div class="card product-card">
                    <div class="product-image position-relative">
                        <a href="" class="product-img"><img class="card-img-top" src="{{asset('Ecomfront-assets/images/product-8.jpg')}}" alt=""></a>
                        <a class="whishlist" href="222"><i class="far fa-heart"></i></a>                            

                        <div class="product-action">
                            <a class="btn btn-dark" href="#">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </a>                            
                        </div>
                    </div>                        
                    <div class="card-body text-center mt-3">
                        <a class="h6 link" href="">Dummy Product Title</a>
                        <div class="price mt-2">
                            <span class="h5"><strong>$100</strong></span>
                            <span class="h6 text-underline"><del>$120</del></span>
                        </div>
                    </div>                        
                </div> 
                
            </div>
        </div>
    </div>
  </section>
@endsection
  


