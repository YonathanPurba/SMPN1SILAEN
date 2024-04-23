<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;    
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        // Check if the view file exists
        if (!View::exists('artikel.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $artikel = Artikel::with(['user','kategoriArtikel'])->latest()->paginate(4);
        return view('artikel.index',compact('artikel'));
    }

    public function show(Artikel $artikel)
    {
        // Check if the view file exists
        if (!View::exists('artikel.show')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('artikel.show',compact('artikel'));
    }

    public function search(Request $request)
    {   
        // Check if the view file exists
        if (!View::exists('artikel.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $artikel = Artikel::with(['user','kategoriArtikel'])->where(function($query) use ($request){
            $query->where('judul','like','%'.$request->keyword.'%')
            ->orWhere('deskripsi','like','%'.$request->keyword.'%');
        })->paginate(4);

        return view('artikel.index',compact('artikel'));
    }
}
