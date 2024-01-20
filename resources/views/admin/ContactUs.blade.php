@extends('admin.layouts.app')
@extends('admin.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Contact us</h1>
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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone number</th>
                            <th>City</th>
                            <th>Cnic</th>
                            <th>Email</th>
                            <th>Purpose</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Muhammad</td>
                            <td>Ehtisham</td>
                            <td>0333809879</td>
                            <td>islamabad</td>
                            <td>44402-6589647-9 </td>
                            <td>xyz@gmail.com</td>
                            <td style="height: 5rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cumque necessitatibus eius nemo ipsa dolorem quam fuga alias iure nesciunt officiis pariatur libero ducimus suscipit, nobis rem voluptatibus et delectus.</td>
                                                                      
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