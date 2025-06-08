<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
Route::get('/about',[MenuController::class,'about_page']);
Route::get('/',[MenuController::class,'home_page']);

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/portfolio', [GalleryController::class, 'index'])->name('portfolio');