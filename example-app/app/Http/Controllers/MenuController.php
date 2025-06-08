<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PortfolioController;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function home_page(){
    return view("index");
    }
    public function about_page(){
    return view("about-page");
    }
    public function contact(){
    return view("contact");
    }
public function portfolio(PortfolioController $portfolioController){
    // Теперь $portfolioController доступен автоматически
    return view("portfolio");
}
    //
}

