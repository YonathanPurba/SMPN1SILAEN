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
        return view('fasilitas.index',compact('fasilitas'));
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
    
        return redirect('fasilitas.index')->with('status', 'Tenaga Pengajar berhasil ditambahkan.');
}
    
    public function create()
    {
        return view('fasilitas.create');
    }
    public function delete($fasilitas)
    {
        $delete = Fasilitas::find($fasilitas);
        if ($delete->delete()) {
            return redirect()->back();
        }
    }

    public function edit(Request $request, $id)
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
    return redirect('fasilitas.index');
    }
    public function update($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

}
