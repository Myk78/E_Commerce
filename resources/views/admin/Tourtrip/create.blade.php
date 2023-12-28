@extends('admin.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add TourPackage</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('admin.Tourtrip.list')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <form action="" method="POST">
        <div class="card">
            <div class="card-body">								
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name">Title</label>
                            <select name="Transporttype" id="Transporttype" class="form-control">
                                <option value="1">2 Days</option>
                                <option value="0">3 Days</option>
                                <option value="0">6 Days</option>
                                <option value="0">8 Days</option>
                            </select>	
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hotelname">Package Name</label>
                            <input type="text" name="hotelname" id="hotelname" class="form-control" placeholder="Enter hotel name">	
                        </div>
                    </div>	
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="transportdetails">Package Details</label>
                            <textarea class="form-control" id="transportdetails" name="transportdetails" rows="3"></textarea>	
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="Transporttype">No of user</label>
                            <select name="Transporttype" id="Transporttype" class="form-control">
                                <option value="1">2</option>
                                <option value="0">4</option>
                                <option value="0">6</option>
                                <option value="0">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="price">Package Price</label>
                            <select name="price" id="price" class="form-control">
                                <option value="1">18000 Rs</option>
                                <option value="0">33000 Rs</option>
                                <option value="0">57000 Rs</option>
                                <option value="0">75000 Rs</option>
                            </select>	
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload image</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                         </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">active</option>
                                <option value="0">Block</option>
                            </select>
                        </div>
                    </div>		
                </div>
            </div>							
        </div>
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Create</button>
            <a href="{{ route('admin.Tourtrip.list')}}" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </form>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('customjs')
    <script>
      
    </script>
@endsection