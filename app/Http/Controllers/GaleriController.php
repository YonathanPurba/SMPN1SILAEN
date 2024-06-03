<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\GaleriDeleteEvent;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\Galeri;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;  

class GaleriController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService = $summernoteService;
        $this->uploadService = $uploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Galeri::with(['user'])->get();
        return view('admin.artikel.index',compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $this->summernoteService->imageUpload('artikel'),
            'thumbnail' => $this->uploadService->imageUpload('artikel'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.artikel.index')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $artikel)
    {
        // Check if the view file exists
        if (!View::exists('artikel.show')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('artikel.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $artikel)
    {   

        return view('admin.artikel.edit',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $artikel)
    {
        $this->authorize('update',$artikel);

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $this->summernoteService->imageUpload('artikel'),
            'thumbnail' => $this->uploadService->imageUpload('artikel'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
        ]);
           
        return redirect()->route('admin.artikel.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $artikel)
    {   
        $this->authorize('delete',$artikel);

        event(new GaleriDeleteEvent($artikel));
        
        $artikel->delete();
        return redirect()->route('admin.artikel.index')->with('success','Data berhasil dihapus');
    }

    
}