<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth; // Import the View facade

class PrestasiController extends Controller
{
    public function view()
    {
        // Check if the view file exists
        if (!View::exists('prestasi.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('profil.prestasi');
    }

    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index',compact('pengajar'));

    }

    public function store(Request $request)
    {
        $prestasi = new Prestasi();
        $prestasi->judul_prestasi = $request->judul_prestasi;
        $prestasi->deskripsi_prestasi = $request->deskripsi_prestasi;
        $prestasi->tanggal_prestasi = $request->tanggal_prestasi;
        $prestasi->created_by = Auth::id();
        $prestasi->update_by = Auth::id();
    
            if ($request->hasFile('gambar_prestasi')) {
                $file = $request->file('gambar_prestasi');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('folderimage'), $filename);
                $prestasi->gambar_prestasi = $filename;
            } else {
                $prestasi->gambar_prestasi = null;
            }
    
        $prestasi->save();
    
        return redirect('prestasi.index')->with('status', 'Prestasi berhasil ditambahkan.');
}
}
