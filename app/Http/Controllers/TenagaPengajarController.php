<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TenagaPengajar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View; 

class TenagaPengajarController extends Controller
{
    public function index()
    {
        $pengajar = TenagaPengajar::all();
        return view('admin.tenagapengajar.index',compact('pengajar'));

    }

    public function store(Request $request)
    {
        $pengajar = new TenagaPengajar;
        $pengajar->nama_tenagapengajar = $request->nama_tenagapengajar;
        $pengajar->jabatan = $request->jabatan;
        $pengajar->nip = $request->nip;
        $pengajar->alamat = $request->alamat;
        $pengajar->created_by = Auth::id();
        $pengajar->update_by = Auth::id();
    
            if ($request->hasFile('gambar_tenagapengajar')) {
                $file = $request->file('gambar_tenagapengajar');
                $filename = $file->getClientOriginalName();
                $file->move(public_path('folderimage'), $filename);
                $pengajar->gambar_tenagapengajar = $filename;
            } else {
                $pengajar->gambar_tenagapengajar = null;
            }
    
         $pengajar->save();
    
        return redirect()->route('admin.tenagapengajar.index')->with('success', 'Tenaga Pengajar berhasil ditambahkan.');
}

public function update(Request $request, $id)
{
    $update = TenagaPengajar::find($id);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('gambar_tenagapengajar')) {
        $file = $request->file('gambar_tenagapengajar');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('folderimage'), $filename);
        $update->gambar_tenagapengajar = $filename;
    }

    // Update data lainnya
    $update->nama_tenagapengajar = $request->nama_tenagapengajar;
    $update->jabatan = $request->jabatan;
    $update->nip = $request->nip;
    $update->alamat = $request->alamat;
    $update->update_by = Auth::id();

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.tenagapengajar.index')->with('success', 'Tenaga Pengajar berhasil diedit.');
}

public function delete($id)
{
    $pengajar = TenagaPengajar::find($id);

    if ($pengajar) {
        $pengajar->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    return response()->json(['error' => 'Data tidak ditemukan atau gagal dihapus!'], 404);
}

    public function create()
        {
            return view('admin.tenagapengajar.create');
        }

        public function edit($id)
        {
            $pengajar = TenagaPengajar::find($id);
            return view('admin.tenagapengajar.edit', compact('pengajar'));
        }

        public function view()
        {
            // Check if the view file exists
            if (!View::exists('tenagapengajar.index')) {
                // If the view file doesn't exist, return a 404 error view
                return response()->view('errors.404', [], 404);
            }
            
            $pengajar = TenagaPengajar::all();
            return view('tenagapengajar.index',compact('pengajar'));
        }
    
        public function show(TenagaPengajar $pengajar)
        {
            // Check if the view file exists
            if (!View::exists('tenagapengajar.show')) {
                // If the view file doesn't exist, return a 404 error view
                return response()->view('errors.404', [], 404);
            }
            
            return view('tenagapengajar.show',compact('pengajar'));
        }

    
}