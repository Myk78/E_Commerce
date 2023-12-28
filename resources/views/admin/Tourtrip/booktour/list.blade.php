@extends('admin.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Trip Booking</h1>
            </div>
            {{-- <div class="col-sm-6 text-right">
                <a href="{{ route('admin.Hotel.AddHotel') }}" class="btn btn-primary">Add New Hotel</a>
            </div> --}}
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <div class="input-group input-group" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">User ID</th>
                            <th>Package Title</th>
                            <th>Package Image</th>
                            <th>Package Price</th>
                            <th>Customer Name</th>
                            <th>Customer Cnic</th>
                            <th>Cnic Image</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Tour Package</th>
                            <th>Availability</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2 Days</td>
                            <td><img src="https://www.travelo.pk/images/packages/sep18saifulmulook_cover.png" alt="" width="60px" height="60px" class="rounded"></td>
                            <td>18000</td>
                            <td>Muhammad yaseen</td>
                            <td>44402-6589647-9 </td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjREoX8Gxt8QVn-p_ISmXjUpLAwUFffeNwMrly8mOwbQ&s" alt="" width="60px" height="60px" class="rounded"></td>
                            <td>0323234434</td>
                            <td>xyz@gmail.com</td>
                            <td>Murree</td>
                            <td>
                                <a href="">
                                     <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 48 48">
                                    <path fill="#c8e6c9" d="M36,42H12c-3.314,0-6-2.686-6-6V12c0-3.314,2.686-6,6-6h24c3.314,0,6,2.686,6,6v24C42,39.314,39.314,42,36,42z"></path><path fill="#4caf50" d="M34.585 14.586L21.014 28.172 15.413 22.584 12.587 25.416 21.019 33.828 37.415 17.414z"></path>
                                    </svg>    
                                </a>
                                <a href="">
                                   <img src="{{asset('adminassets/img/Cross.png')}}" width="50px" height="50px" alt="">
                                </a>
                            </td>
                            
                          
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>6 Days</td>
                            <td><img src="https://www.travelo.pk/images/packages/sep18saifulmulook_cover.png" alt="" width="60px" height="60px" class="rounded"></td>
                            <td>33000</td>
                            <td>Muhammad Hammad</td>
                            <td>44402-6589647-9 </td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjREoX8Gxt8QVn-p_ISmXjUpLAwUFffeNwMrly8mOwbQ&s" alt="" width="60px" height="60px" class="rounded"></td>
                            <td>0323234434</td>
                            <td>xyz@gmail.com</td>
                            <td>Sawat</td>
                            <td>
                                <a href="">
                                     <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 48 48">
                                    <path fill="#c8e6c9" d="M36,42H12c-3.314,0-6-2.686-6-6V12c0-3.314,2.686-6,6-6h24c3.314,0,6,2.686,6,6v24C42,39.314,39.314,42,36,42z"></path><path fill="#4caf50" d="M34.585 14.586L21.014 28.172 15.413 22.584 12.587 25.416 21.019 33.828 37.415 17.414z"></path>
                                    </svg>    
                                </a>
                                <a href="">
                                   <img src="{{asset('adminassets/img/Cross.png')}}" width="50px" height="50px" alt="">
                                </a>
                            </td>
                            
                          
                        </tr>
                    </tbody>
                </table>										
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('customjs')
    <script>
      
    </script>
@endsection