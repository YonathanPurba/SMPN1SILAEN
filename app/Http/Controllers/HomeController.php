<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Check if the view file exists
        if (!view()->exists('home.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }

        // Calculate the total number of male students
        $totalLakiLaki = DB::table('siswa')
                            ->sum('jumlah_siswa_laki_laki');
        
        $totalPerempuan = DB::table('siswa')
                            ->sum('jumlah_siswa_perempuan');
                            
        $total = DB::table('siswa')
                            ->sum('total');
        
        $kepalasekolah = DB::table('kepala_sekolah')->first();
        
        // Retrieve articles and announcements
        $artikel = Artikel::with(['user', 'kategoriArtikel'])->latest()->take(2)->get();
        $pengumuman = Pengumuman::with(['user'])->latest()->take(2)->get();

        // Pass data to the view using compact
        return view('home.index', compact('artikel', 'pengumuman', 'totalLakiLaki', 'totalPerempuan', 'total','kepalasekolah'));
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
