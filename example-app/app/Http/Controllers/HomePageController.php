<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function home_page(){
    return view("index");
    }
    //
}

