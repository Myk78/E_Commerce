<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class EshopController extends Controller
{
    public function index(){

        Category::orderBy('name','ASC')->get();
        return view('front.commerce.Eshop');
    }
}
