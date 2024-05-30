<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Auth;

class FasilitasController extends Controller
{

    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index',compact('fasilitas'));
    }

    public function store(Request $request)
    {
        $fasilitas = new Fasilitas();
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->deskripsi_fasilitas = $request->deskripsi_fasilitas;
        $fasilitas->created_by = Auth::id();
        $fasilitas->update_by = Auth::id();
    
            if ($request->hasFile('gambar_fasilitas')) {
                $file = $request->file('gambar_fasilitas');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('folderimage'), $filename);
                $fasilitas->gambar_fasilitas = $filename;
            } else {
                $fasilitas->gambar_fasilitas = null;
            }
    
        $fasilitas->save();
    
        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan.');
}
    
    public function create()
    {
        return view('admin.fasilitas.create');
    }
    public function delete($id)
{
    $fasilitas = Fasilitas::find($id);

    if ($fasilitas) {
        $fasilitas->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    return response()->json(['error' => 'Data tidak ditemukan atau gagal dihapus!'], 404);
}


    public function update(Request $request, $id)
{
    $update = Fasilitas::find($id);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('gambar_fasilitas')) {
        $file = $request->file('gambar_fasilitas');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('folderimage'), $filename);
        $update->gambar_fasilitas = $filename;
    }

    // Update data lainnya
    $update->nama_fasilitas = $request->nama_fasilitas;
    $update->deskripsi_fasilitas = $request->deskripsi_fasilitas;
    $update->update_by = Auth::id();

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.fasilitas.index')->with('status', 'Fasilitas berhasil ditambahkan.');
    }
    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

}
