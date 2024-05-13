<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Auth;

class FasilitasController extends Controller
{
    public function index()
    {
        if (!view()->exists('profil.fasilitas')) {
            return response()->view('errors.404', [], 404);
        }
        
        return view('profil.fasilitas');
    }

    public function indexfasilitas()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.index',compact('fasilitas'));

    }

    public function store(Request $request)
{
    $request->validate([
        'nama_fasilitas' => 'required',
        'deskripsi_fasilitas' => 'required',
        'gambar_fasilitas' => 'required|image|mimes:png,jpg,gif,jpeg,svg,webp,jfif|max:2048', // misalnya maksimum 2MB
    ]);

    $fasilitas = new Fasilitas;
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

    return redirect()->route('fasilitas.index')->with('status', 'Fasilitas berhasil ditambahkan.');
}
    public function create()
    {
        return view('fasilitas.create');
    }
}
