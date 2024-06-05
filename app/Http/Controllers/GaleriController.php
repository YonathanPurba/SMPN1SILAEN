<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;  

class GaleriController extends Controller
{

    public function index()
    {
        $galeri = Galeri::with(['user'])->get();
        return view('admin.galeri.index',compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {   
        $galeri = new Galeri();
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->user_id = Auth::id();
        $galeri->created_by = Auth::user()->name;
        $galeri->update_by = Auth::user()->name;
        $galeri->slug = Str::slug($request->judul);
    
            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('folderimage'), $filename);
                $galeri->thumbnail = $filename;
            } else {
                $galeri->thumbnail = null;
            }
    
        $galeri->save();
    
        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan.');

    }


    public function show(Galeri $galeri)
    {
        // Check if the view file exists
        if (!View::exists('galeri.show')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('galeri.show',compact('galeri'));
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
{
    $update = Galeri::find($id);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('thumbnail')) {
        $file = $request->file('thumbnail');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('folderimage'), $filename);
        $update->thumbnail = $filename;
    }

    // Update data lainnya
    $update->judul = $request->judul;
    $update->deskripsi = $request->deskripsi;
    $update->slug = Str::slug($request->judul);
    $update->user_id = Auth::id();
    $update->update_by = Auth::user()->name;

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diedit.');
    }

    public function delete($id)
    {   
        $galeri = Galeri::find($id);

    if ($galeri) {
        $galeri->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    return response()->json(['error' => 'Data tidak ditemukan atau gagal dihapus!'], 404);
    }

    public function view()
    {
        // Check if the view file exists
        if (!View::exists('galeri.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $galeri = Galeri::with(['user',])->latest()->paginate(4);
        return view('galeri.index',compact('galeri'));
    }

    
}