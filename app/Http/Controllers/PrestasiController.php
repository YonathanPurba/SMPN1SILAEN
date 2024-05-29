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
        return view('admin.prestasi.index',compact('prestasi'));

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
    
        return redirect()->route('admin.prestasi.index')->with('status', 'Tenaga Pengajar berhasil ditambahkan.');
}

public function update(Request $request, $id)
{
    $update = Prestasi::find($id);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('gambar_prestasi')) {
        $file = $request->file('gambar_prestasi');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('folderimage'), $filename);
        $update->gambar_prestasi = $filename;
    }

    // Update data lainnya
    $update->judul_prestasi = $request->judul_prestasi;
    $update->deskripsi_prestasi = $request->deskripsi_prestasi;
    $update->tanggal_prestasi = $request->tanggal_prestasi;
    $update->update_by = Auth::id();

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.prestasi.index')->with('status', 'Tenaga Pengajar berhasil ditambahkan.');
}

    public function delete($prestasi)
    {
        $delete = Prestasi::find($prestasi);
        if ($delete->delete()) {
            return redirect()->back();
        }
    }

    public function create()
        {
            return view('admin.prestasi.create');
        }

        public function edit($id)
        {
            $prestasi = Prestasi::find($id);
            return view('admin.prestasi.edit', compact('prestasi'));
        }
}
