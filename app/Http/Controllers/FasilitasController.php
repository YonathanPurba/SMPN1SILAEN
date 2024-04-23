<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        if (!view()->exists('fasilitas.index')) {
            return response()->view('errors.404', [], 404);
        }
        
        return view('fasilitas.index');
    }
}
