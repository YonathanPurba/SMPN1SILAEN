<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::with(['user'])->get();
        return view('admin.pengumuman.index',compact('pengumuman')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Add additional data to the request
    $request->request->add([
        'slug' => Str::slug($request->judul),
        'tgl' => date('Y-m-d'),
        'user_id' => auth()->user()->id,
        'created_by' => auth()->user()->id, // Adding created_by field
    ]);

    // Create the new Pengumuman
    Pengumuman::create($request->all());

    // Redirect to the index route with a success message
    return redirect()->route('admin.pengumuman.index')->with('success', 'Data berhasil ditambah');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $pengumuman = Pengumuman::where('slug')->firstOrFail();
    //     return view('pengumuman.show', compact('pengumuman'));
        
    // }

    public function show(Pengumuman $pengumuman)
    {
        // Check if the view file exists
        if (!view()->exists('pengumuman.show')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit',compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $this->authorize('update',$pengumuman);

        $request->request->add([
            'slug' => Str::slug($request->judul),
            'tgl' => date('Y-m-d'),
            'user_id' => auth()->user()->id,
        ]);
        $pengumuman->update($request->all());
           
        return redirect()->route('admin.pengumuman.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $this->authorize('delete',$pengumuman);
        
        $pengumuman->delete();
        return redirect()->route('admin.pengumuman.index')->with('success','Data berhasil dihapus');
    }

    public function view()
    {
        // Check if the view file exists
        if (!View::exists('pengumuman.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $pengumuman = Pengumuman::with(['user',])->latest()->paginate(4);
        return view('pengumuman.index',compact('pengumuman'));
    }
}

