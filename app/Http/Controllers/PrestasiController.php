<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Import the View facade

class PrestasiController extends Controller
{
    public function index()
    {
        // Check if the view file exists
        if (!View::exists('prestasi.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('prestasi.index');
    }
}
