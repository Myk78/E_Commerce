<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminloginController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\TempImagesController;
use App\Http\Controllers\EfrontController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TourGuide\TourController;
use Illuminate\Http\Request;
use League\Flysystem\UrlGeneration\TemporaryUrlGenerator;

// Route::get('/', function () {
//     return view('welcome');
// });


// dashboard home
Route::get('/',[FrontController::class,'index'])->name('front.home');

// Ecommerce Route
Route::get('/Ecommercedashboard',[EfrontController::class,'index'])->name('front.commerce.home');

// tour guide route
Route::get('/TourGuide',[TourController::class,'index'])->name('front.tour');

Route::get('/Tourdashboard',function () {
    return view('front.TourGuide');
})->name('front.tour');

Route::get('/TourGuide',function () {
    return view('front.TourGuide.Kpk');
})->name('front.TourGuide.kpk');



 


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