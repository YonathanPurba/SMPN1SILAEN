<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KepalaSekolah;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class KepalaSekolahController extends Controller
{
    public function index()
{
    $kepalasekolah = KepalaSekolah::all();
    $kepsekCount = $kepalasekolah->count();

    return view('admin.kepalasekolah.index', compact('kepalasekolah', 'kepsekCount'));
}

    public function store(Request $request)
    {   
        $kepalasekolah = new KepalaSekolah();
        $kepalasekolah->nama = $request->nama;
        $kepalasekolah->nip = $request->nip;
        $kepalasekolah->user_id = Auth::id();
        $kepalasekolah->created_by = Auth::user()->name;
        $kepalasekolah->update_by = Auth::user()->name;
    
            if ($request->hasFile('gambar_kepalasekolah')) {
                $file = $request->file('gambar_kepalasekolah');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('folderimage'), $filename);
                $kepalasekolah->gambar_kepalasekolah = $filename;
            } else {
                $kepalasekolah->gambar_kepalasekolah = null;
            }
    
        $kepalasekolah->save();
    
        return redirect()->route('admin.kepalasekolah.index')->with('success', 'Kepala Sekolah berhasil ditambahkan.');
}
    
    public function create()
    {
        return view('admin.kepalasekolah.create');
    }
    public function delete($id)
{
    $kepalasekolah = KepalaSekolah::find($id);

    if ($kepalasekolah) {
        $kepalasekolah->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    return response()->json(['error' => 'Data tidak ditemukan atau gagal dihapus!'], 404);
}


    public function update(Request $request, $id)
{
    $update = KepalaSekolah::find($id);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('gambar_kepalasekolah')) {
        $file = $request->file('gambar_kepalasekolah');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('folderimage'), $filename);
        $update->gambar_kepalasekolah = $filename;
    }

    // Update data lainnya
    $update->nama = $request->nama;
    $update->nip = $request->nip;
    $update->user_id = Auth::id();
    $update->update_by = Auth::user()->name;

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.kepalasekolah.index')->with('success', 'Kepala Sekolah berhasil diedit.');
    }
    public function edit($id)
    {
        $kepalasekolah = KepalaSekolah::find($id);
        return view('admin.kepalasekolah.edit', compact('kepalasekolah'));
    }
}
