<?php

namespace App\Http\Controllers;

use App\Models\TenagaPengajar;
use App\Models\Artikel;
use App\Models\Ekstrakulikuler;
use App\Models\Pengumuman;

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
        
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('profil.ekstrakurikuler', compact('ekstrakulikuler'));
    } 
    
    public function fasilitas()
    {
        if (!view()->exists('profil.fasilitas')) {
            return response()->view('errors.404', [], 404);
        }
        
        return view('profil.fasilitas');
    }

    public function prestasi()
    {
        if (!view()->exists('prestasi.index')) {
            return response()->view('errors.404', [], 404);
        }
        
        return view('prestasi.index');
    }

    public function artikel()
    {
        // Check if the view file exists
        if (!View::exists('artikel.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $artikel = Artikel::with(['user',])->latest()->paginate(4);
        return view('artikel.index',compact('artikel'));
    }

    public function pengumuman()
    {
        // Check if the view file exists
        if (!View::exists('pengumuman.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $pengumuman = Pengumuman::with(['user',])->latest()->paginate(4);
        return view('pengumuman.index',compact('pengumuman'));
    }
}
