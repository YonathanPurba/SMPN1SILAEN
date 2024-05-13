<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TenagaPengajar;
use Illuminate\Support\Facades\View; // Import the View facade

class ProfilController extends Controller
{
    public function visimisi()
    {
        // Check if the view file exists
        if (!View::exists('profil.visimisi')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('profil.visimisi');
    }   

    public function identitas()
    {
        // Check if the view file exists
        if (!View::exists('profil.identitas')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('profil.identitas');
    }   

    public function tenagapengajar()
    {
        // Check if the view file exists
        if (!View::exists('profil.tenagapengajar')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        $pengajar = TenagaPengajar::all();
        return view('profil.tenagapengajar',compact('pengajar'));
    } 
    
    public function ekstrakurikuler()
    {
        // Check if the view file exists
        if (!View::exists('profil.ekstrakurikuler')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('profil.ekstrakurikuler');
    } 
    
    public function fasilitas()
    {
        if (!view()->exists('profil.fasilitas')) {
            return response()->view('errors.404', [], 404);
        }
        
        return view('profil.fasilitas');
    }
}
