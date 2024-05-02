<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    public function index()
    {
        // Check if the view file exists
        if (!view()->exists('home.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('home.index', [
            'artikel' => Artikel::with(['user','kategoriArtikel'])->latest()->take(2)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(2)->get(),
        ]);
    }

    public function about()
    {
        // Check if the view file exists
        if (!view()->exists('home.about')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('home.about');
    }

    public function contact()
    {
        // Check if the view file exists
        if (!view()->exists('home.contact')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('home.contact');
    }
}
