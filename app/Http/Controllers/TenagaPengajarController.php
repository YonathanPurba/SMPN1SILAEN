<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TenagaPengajar;
use Illuminate\Support\Facades\Auth;

class TenagaPengajarController extends Controller
{
    public function index()
    {
        $pengajar = TenagaPengajar::all();
        return view('tenagapengajar.index',compact('pengajar'));

    }

    public function store(Request $request)
    {
        $pengajar = new TenagaPengajar;
        $pengajar->nama_tenagapengajar = $request->nama_tenagapengajar;
        $pengajar->jabatan = $request->jabatan;
        $pengajar->nip = $request->nip;
        $pengajar->alamat = $request->alamat;
        $pengajar->notelepon = $request->notelepon;
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
    
        return redirect('tenagapengajar.index')->with('status', 'Tenaga Pengajar berhasil ditambahkan.');
}

public function edit(Request $request, $id)
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
    $update->notelepon = $request->notelepon;
    $update->update_by = Auth::id();

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect('tenagapengajar.index');
}

public function delete($pengajar)
    {
        $delete = TenagaPengajar::find($pengajar);
        if ($delete->delete()) {
            return redirect()->back();
        }
    }

    public function create()
        {
            return view('tenagapengajar.create');
        }

        public function update($id)
        {
            $pengajar = TenagaPengajar::find($id);
            return view('tenagapengajar.edit', compact('pengajar'));
        }

    
}