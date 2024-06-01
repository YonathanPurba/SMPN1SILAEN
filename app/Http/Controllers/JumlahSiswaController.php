<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JumlahSiswa;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class JumlahSiswaController extends Controller
{
    public function index()
    {
        $jumlah_siswa = DB::table('kelas')
                   ->join('jumlah_siswa', 'kelas.id_kelas', '=', 'jumlah_siswa.id_kelas')
                   ->select('jumlah_siswa.*', 'kelas.nama_kelas')
                   ->get();
        return view('admin.jumlah_siswa.index',compact('jumlah_siswa'));

    }

    public function tambah()
    {   
        $kelas = DB::table('kelas')
                ->where('status', '=', 0)
                ->get();
        return view('admin.jumlah_siswa.create',compact('kelas'));
    }

    public function store(Request $request)
{
    $jumlah_siswa = new JumlahSiswa;
    $jumlah_siswa->jumlah_siswa_laki_laki = $request->jumlah_siswa_laki_laki;
    $jumlah_siswa->jumlah_siswa_perempuan = $request->jumlah_siswa_perempuan;
    
    // Hitung total jumlah siswa
    $jumlah_siswa->total = $request->jumlah_siswa_laki_laki + $request->jumlah_siswa_perempuan;
    
    $jumlah_siswa->id_kelas = $request->id_kelas;
    $jumlah_siswa->created_by = Auth::id();
    $jumlah_siswa->update_by = Auth::id();
    
    if ($jumlah_siswa->save())
    {
        $kelas = Kelas::find($request->id_kelas);
        $kelas->status = 1;
        $kelas->save();
    }
    
    return redirect()->route('admin.jumlah_siswa.index')->with('success', 'Jumlah Siswa berhasil ditambahkan');
}

    public function create()
    {   
        $kelas = DB::table('kelas')
                ->where('status', '=', 0)
                ->get();
        return view('admin.jumlah_siswa.create',compact('kelas'));
    }

    public function totalLakiLaki()
{
    try {
        $totalLakiLaki = JumlahSiswa::sum('jumlah_siswa_laki_laki');
        return view('admin.jumlah_siswa.total_laki_laki', compact('totalLakiLaki'));
    } catch (\Exception $e) {
        Log::error('Error calculating total laki-laki: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Terjadi kesalahan saat menghitung total siswa laki-laki.');
    }
}

}
