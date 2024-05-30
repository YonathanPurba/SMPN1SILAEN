<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;
use Illuminate\Support\Facades\Auth;

class EkstrakulikulerController extends Controller
{
    public function index()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view('admin.ekstrakulikuler.index',compact('ekstrakulikuler'));

    }

    public function store(Request $request)
    {
        $ekstrakulikuler = new Ekstrakulikuler();
        $ekstrakulikuler->judul_ekstrakulikuler = $request->judul_ekstrakulikuler;
        $ekstrakulikuler->deskripsi_ekstrakulikuler = $request->deskripsi_ekstrakulikuler;
        $ekstrakulikuler->created_by = Auth::id();
        $ekstrakulikuler->update_by = Auth::id();
    
            if ($request->hasFile('gambar_ekstrakulikuler')) {
                $file = $request->file('gambar_ekstrakulikuler');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('folderimage'), $filename);
                $ekstrakulikuler->gambar_ekstrakulikuler = $filename;
            } else {
                $ekstrakulikuler->gambar_ekstrakulikuler = null;
            }
    
        $ekstrakulikuler->save();
    
        return redirect()->route('admin.ekstrakulikuler.index')->with('success', 'Ekstrakulikuler berhasil ditambahkan.');
    }

    public function create()
    {
        return view('admin.ekstrakulikuler.create');
    }
    public function delete($id)
{
    $ekstrakulikuler = Ekstrakulikuler::find($id);

    if ($ekstrakulikuler) {
        $ekstrakulikuler->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    return response()->json(['error' => 'Data tidak ditemukan atau gagal dihapus!'], 404);
}


    public function update(Request $request, $id)
{
    $update = Ekstrakulikuler::find($id);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('gambar_ekstrakulikuler')) {
        $file = $request->file('gambar_ekstrakulikuler');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('folderimage'), $filename);
        $update->gambar_ekstrakulikuler = $filename;
    }

    // Update data lainnya
    $update->judul_ekstrakulikuler = $request->judul_ekstrakulikuler;
    $update->deskripsi_ekstrakulikuler = $request->deskripsi_ekstrakulikuler;
    $update->update_by = Auth::id();

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.ekstrakulikuler.index')->with('success', 'Ekstrakulikuler berhasil diedit.');
    }

    public function edit($id)
    {
        $ekstrakulikuler = Ekstrakulikuler::find($id);
        return view('admin.ekstrakulikuler.edit', compact('ekstrakulikuler'));
    }

}


