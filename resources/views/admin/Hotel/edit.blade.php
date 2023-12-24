@extends('admin.layouts.app')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Hotel</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="categories.html" class="btn btn-primary">Back</a>
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
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">	
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hotelname">Hotel name</label>
                            <input type="text" name="hotelname" id="hotelname" class="form-control" placeholder="Enter hotel name">	
                        </div>
                    </div>	
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hoteldes">Hotel Discription</label>
                            <textarea class="form-control" id="hoteldes" name="hoteldes" rows="3"></textarea>	
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hotelloc">Hotel location</label>
                            <input type="text" name="hotelloc" id="hotelloc" class="form-control" placeholder="Location">	
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status">Room Type</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Simple</option>
                                <option value="0">Bussiness</option>
                                <option value="0">Deluxe</option>
                            </select>
                        </div>
                    </div>

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload image</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
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
            <a href="{{ route('admin.Hotel.Hotelist')}}" class="btn btn-outline-dark ml-3">Cancel</a>
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