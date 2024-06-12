<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        return view('admin.ekstrakurikuler.index',compact('ekstrakurikuler'));

    }

    public function store(Request $request)
    {
        $ekstrakurikuler = new Ekstrakurikuler();
        $ekstrakurikuler->judul_ekstrakurikuler = $request->judul_ekstrakurikuler;
        $ekstrakurikuler->deskripsi_ekstrakurikuler = $request->deskripsi_ekstrakurikuler;
        $ekstrakurikuler->slug = Str::slug($request->judul_ekstrakurikuler);
        $ekstrakurikuler->user_id = Auth::id();
        $ekstrakurikuler->created_by = Auth::user()->name;
        $ekstrakurikuler->update_by = Auth::user()->name;
    
            if ($request->hasFile('gambar_ekstrakurikuler')) {
                $file = $request->file('gambar_ekstrakurikuler');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('folderimage'), $filename);
                $ekstrakurikuler->gambar_ekstrakurikuler = $filename;
            } else {
                $ekstrakurikuler->gambar_ekstrakurikuler = null;
            }
    
        $ekstrakurikuler->save();
    
        return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }
    public function delete($id)
{
    $ekstrakurikuler = Ekstrakurikuler::find($id);

    if ($ekstrakurikuler) {
        $ekstrakurikuler->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    return response()->json(['error' => 'Data tidak ditemukan atau gagal dihapus!'], 404);
}


    public function update(Request $request, $id)
{
    $update = Ekstrakurikuler::find($id);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('gambar_ekstrakurikuler')) {
        $file = $request->file('gambar_ekstrakurikuler');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('folderimage'), $filename);
        $update->gambar_ekstrakurikuler = $filename;
    }

    // Update data lainnya
    $update->judul_ekstrakurikuler = $request->judul_ekstrakurikuler;
    $update->deskripsi_ekstrakurikuler = $request->deskripsi_ekstrakurikuler;
    $update->slug = Str::slug($request->judul_ekstrakurikuler);
    $update->user_id = Auth::id();
    $update->update_by = Auth::user()->name;

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil diedit.');
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::find($id);
        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function view()
    {
        // Check if the view file exists
        if (!View::exists('ekstrakurikuler.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $ekstrakurikuler = Ekstrakurikuler::all();
        return view('ekstrakurikuler.index',compact('ekstrakurikuler'));
    }

    public function show(Ekstrakurikuler $ekstrakurikuler)
    {
        // Check if the view file exists
        if (!View::exists('ekstrakurikuler.show')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('ekstrakurikuler.show',compact('ekstrakurikuler'));
    }

    public function checkTitle(Request $request)
{
    $exists = Ekstrakurikuler::where('judul_ekstrakurikuler', $request->judul_ekstrakurikuler)->exists();
    return response()->json(['exists' => $exists]);
}


}


