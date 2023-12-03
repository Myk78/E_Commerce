<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminloginController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/login',[AdminloginController::class,'index'])->name('admin.login');
Route::group(['prefix' => 'admin'],function(){

    Route::group(['middleware' => 'admin.guest'],function(){
        Route::get('/login',[AdminloginController::class,'index'])->name('admin.login');

    });

    Route::group(['middleware' => 'admin.auth'],function(){

    });
});