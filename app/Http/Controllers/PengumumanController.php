<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function view()
    {
        // Check if the view file exists
        if (!view()->exists('pengumuman.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $pengumuman = Pengumuman::with(['user'])->latest()->paginate(4);
        return view('pengumuman.index', compact('pengumuman'));
    }

    public function index()
    {
        $pengumuman = Pengumuman::with(['user'])->get();
        return view('admin.pengumuman.index',compact('pengumuman'));
    }

    public function show(Pengumuman $pengumuman)
    {
        // Check if the view file exists
        if (!view()->exists('pengumuman.show')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('pengumuman.show', compact('pengumuman'));
    }
}
