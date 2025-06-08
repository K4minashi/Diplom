<?php
namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        $imageName = Portfolio::query()
        ->whereNotNull('name')
        ->orderBy('created_at', 'desc')
        ->get();
        ;
        $portfolioItems = Portfolio::query()
            ->whereNotNull('image') // Только с изображениями
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('portfolio', [
            'imageName' => $imageName,
            'portfolioItems' => $portfolioItems // Явная передача переменной
        ]);
    }
}