<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminloginController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\TempImagesController;
use App\Http\Controllers\EfrontController;
use App\Http\Controllers\EshopController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TourGuide\TourController;
use Illuminate\Http\Request;
use League\Flysystem\UrlGeneration\TemporaryUrlGenerator;

// Route::get('/', function () {
//     return view('welcome');
// });


// TourTracker Home Page route
Route::get('/',[FrontController::class,'index'])->name('front.home');


// --------------------CustomerSide hotel page route
Route::get('/HotelDashboardPage',function () {
    return view('front.Hotel.home');
})->name('front.Hotel.HotelPage');
// Hoteldetail page route
Route::get('/Hoteldetail',function () {
    return view('front.Hotel.hoteldetail');
})->name('front.Hotel.detail');

// --------------------CustomerSide Tourpackage route
Route::get('/TourPackageDashboardPage',function () {
    return view('front.tourpackage.home');
})->name('front.Tour.package');
// Tourpackage page route
Route::get('/Packagedetail',function () {
    return view('front.tourpackage.packagedetail');
})->name('front.Tour.detail');

// --------------------CustomerSide Transport route
Route::get('/TransportDashboardPage',function () {
    return view('front.transport.home');
})->name('front.Transport.Page');
//  Transportdetail page route
Route::get('/Transportdetail',function () {
    return view('front.transport.Transportdetail');
})->name('front.Transport.detail');



// --------------------CustomerSide Ecommerce Route
Route::get('/Ecommercedashboard',[EfrontController::class,'index'])->name('front.commerce.home');
Route::get('/Eshop',[EshopController::class,'index'])->name('front.commerce.shop');
// Ecommerce product detail page route
Route::get('/EcommerceProductPage',function () {
    return view('front.commerce.product');
})->name('front.commerce.Productpage');



// -------------------- CustomerSide tour guide route
Route::get('/TourGuide',[TourController::class,'index'])->name('front.tour');

Route::get('/Tourdashboard',function () {
    return view('front.TourGuide');
})->name('front.tour');

Route::get('/TourGuide',function () {
    return view('front.TourGuide.Kpk');
})->name('front.TourGuide.kpk');


// -------------------- CustomerSide Registration & login route
Route::get('/Registration',function () {
    return view('front.Register');
})->name('front.Register');

Route::get('/Login',function () {
    return view('front.login');
})->name('front.login');




 // admin -------------------Hotel routes
 //create route
 Route::get('/Hotel',function () {
    return view('admin.Hotel.create');
})->name('admin.Hotel.AddHotel');
//list route
Route::get('/Hotellist',function () {
    return view('admin.Hotel.list');
})->name('admin.Hotel.Hotelist');

//Edit route
Route::get('/HotelEdit',function () {
    return view('admin.Hotel.edit');
})->name('admin.Hotel.EditHotel');

//Hotel booking in admin route
Route::get('/HotelBooking',function () {
    return view('admin.Hotel.hotelbooking.list');
})->name('admin.Hotel.hotelbook.list');



// admin -------------------Transport routes
 //create route
Route::get('/AddTransport',function () {
    return view('admin.Transport.create');
})->name('admin.Transport.AddTransport');
//list route
Route::get('/Transportlist',function () {
    return view('admin.Transport.list');
})->name('admin.Transport.list');
//Edit route
Route::get('/TransportEdit',function () {
    return view('admin.Transport.edit');
})->name('admin.Transport.edit');

//Transport booking in admin route
Route::get('/TransportBook',function () {
    return view('admin.Transport.bookTransport.list');
})->name('admin.Transport.bookTrans.list');
 


// admin -------------------Tourpackage routes
 //create route
 Route::get('/AddTourpackage',function () {
    return view('admin.Tourtrip.create');
})->name('admin.Transport.AddTour');
//list route
Route::get('/Packageslist',function () {
    return view('admin.Tourtrip.list');
})->name('admin.Tourtrip.list');
//Edit route
Route::get('/EditPackage',function () {
    return view('admin.Tourtrip.edit');
})->name('admin.Tourtrip.edit');

//Transport booking in admin route
Route::get('/tourBooking',function () {
    return view('admin.Tourtrip.booktour.list');
})->name('admin.Tourtrip.booktour.list');

// admin -------------------ContactUs routes
Route::get('/ContactUs',function () {
    return view('admin.ContactUs');
})->name('admin.Contactus');

 


Route::group(['prefix' => 'admin'],function(){

    Route::group(['middleware' => 'admin.guest'],function(){
        Route::get('/login',[AdminloginController::class,'index'])->name('admin.login');
        Route::post('/authenticate',[AdminloginController::class,'authenticate'])->name('admin.authenticate');

    });

    Route::group(['middleware' => 'admin.auth'],function(){
        Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
        Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');


        //Category Routes
        Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
        Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
        // ajax ya pay hit huga
        Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
        Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name('categories.edit');
        Route::put('/categories/{category}/',[CategoryController::class,'update'])->name('categories.update');
        Route::delete('/categories/{category}/',[CategoryController::class,'destory'])->name('categories.delete');


        //sub_category routes
        Route::get('/sub-categories',[SubCategoryController::class,'index'])->name('sub-categories.index');

        Route::get('/sub-categories/create',[SubCategoryController::class,'create'])->name('sub-categories.create');
        Route::post('/sub-categories',[SubCategoryController::class,'store'])->name('sub-categories.store');



        //temp-images.create
        Route::post('/uploadimage',[TempImagesController::class,'create'])->name('tempimages.create');


        Route::get('/getSlug',function(Request $request){
            $slug='';
            if(!empty($request->title)){
                $slug = Str::slug($request->title);
            }
            return response()->json([
                'status'=>true,
                'slug'=>$slug
            ]);
            
        })->name('getSlug');
    
    });
        

});