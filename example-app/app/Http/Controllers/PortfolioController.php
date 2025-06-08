<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index(){
        
        $porfolio=Portfolio::find(1);
        dump($porfolio);

    }
    //
}

