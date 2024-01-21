

{{-- @section(sidebar)
    
@endsection --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('adminassets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Tour Tracker</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>																
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.Hotel.Hotelist')}}" class="nav-link">
                        <i class="nav-icon fas fa-hotel"></i>
                        <p>Hotel's</p>
                    </a>																
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.Hotel.hotelbook.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-hotel"></i>
                        <p>Hotel Booking</p>
                    </a>																
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.Transport.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Transport's</p>
                    </a>																
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.Transport.bookTrans.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Transport Booking</p>
                    </a>																
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.Tourtrip.list')}}" class="nav-link">
                        <i class="nav-icon fa fa-plane"></i>
                        <p>TripPackage</p>
                    </a>																
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.Tourtrip.booktour.list')}}" class="nav-link">
                        <i class="nav-icon fa fa-plane"></i>
                        <p>Trip Booking</p>
                    </a>																
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.Contactus')}}" class="nav-link">
                        <i class=" nav-icon fas fa-address-book"></i>
                        <p>Contact</p>
                    </a>
                </li>
                
                
                <li class="nav-item">
                    <a href="{{route('categories.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sub-categories.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Sub Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.product.list')}}" class="nav-link">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Products</p>
                    </a>
                </li>							
                <li class="nav-item">
                    <a href="orders.html" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="discount.html" class="nav-link">
                        <i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
                        <p>Discount</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="users.html" class="nav-link">
                        <i class="nav-icon  fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages.html" class="nav-link">
                        <i class="nav-icon  far fa-file-alt"></i>
                        <p>Pages</p>
                    </a>
                </li>							
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
 </aside>