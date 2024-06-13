<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.kelas.index', compact('kelas'));
    }

    public function store(Request $request)
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->user_id = Auth::id();
        $kelas->created_by = Auth::user()->name;
        $kelas->update_by = Auth::user()->name;

        $kelas->save();

        return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
    }


public function update(Request $request, $id)
{
    $update = Kelas::find($id);


    // Update data lainnya
    $update->nama_kelas = $request->nama_kelas;
    $update->user_id = Auth::id();
    $update->update_by = Auth::user()->name;

    // Simpan perubahan ke dalam database
    $update->save();

    // Redirect ke halaman daftar kategori lapangan
    return redirect()->route('admin.kelas.index')->with('success', 'Kelas berhasil diedit.');
}

public function delete($id)
{
    $kelas = Kelas::find($id);

    if ($kelas) {
        $kelas->delete();
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }   
}
    public function create()
    {
        return view('admin.kelas.create');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('admin.kelas.edit', compact('kelas'));
    }

    public function checkName(Request $request)
{
    $exists = Kelas::where('nama_kelas', $request->nama_kelas)->exists();
    return response()->json(['exists' => $exists]);
}

}