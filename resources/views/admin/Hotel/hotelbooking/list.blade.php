@extends('admin.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hotel Booking</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.Hotel.AddHotel') }}" class="btn btn-primary">Add New Hotel</a>
            </div>
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
                            <th width="60">UserID</th>
                            <th>HotelID</th>
                            <th>HotelImage</th>
                            <th>Customer Name</th>
                            <th>Customer cnic</th>
                            <th>cnicImage</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Roomtype</th>
                            <th>Availability</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXSabzx_PMPj-VU338BLZlUx5E72JL_ZcCvXh29vEGtg&s" alt="" width="60px" height="60px" class="rounded"></td>
                            <td>Muhammad yaseen</td>
                            <td>44402-6589647-9 </td>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXSabzx_PMPj-VU338BLZlUx5E72JL_ZcCvXh29vEGtg&s" alt="" width="60px" height="60px" class="rounded"></td>
                            <td>0323234434</td>
                            <td>xyz@gmail.com</td>
                            <td>deluxe</td>
                            
                          
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