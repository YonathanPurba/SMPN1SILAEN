<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pengumuman;
use Str;

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
        $request->request->add([
            'slug' => Str::slug($request->judul),
            'tgl' => date('Y-m-d'),
            'user_id' => auth()->user()->id,
        ]);
        Pengumuman::create($request->all());

        return redirect()->route('admin.pengumuman.index')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}


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

