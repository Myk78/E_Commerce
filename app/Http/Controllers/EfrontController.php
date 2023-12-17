<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EfrontController extends Controller
{
    public function index(){
        return view('front.commerce.home');

    }
}
