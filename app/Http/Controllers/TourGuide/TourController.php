<?php

namespace App\Http\Controllers\TourGuide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index(){
        return view('front.tour');
    }
}

