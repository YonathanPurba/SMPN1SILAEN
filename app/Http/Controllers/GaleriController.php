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
        $galeri = Galeri::with(['user'])->get();
        return view('admin.galeri.index',compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create');
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
            'deskripsi' => $this->summernoteService->imageUpload('galeri'),
            'thumbnail' => $this->uploadService->imageUpload('galeri'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.galeri.index')->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        // Check if the view file exists
        if (!View::exists('galeri.show')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        return view('galeri.show',compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {   

        return view('admin.galeri.edit',compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $this->authorize('update',$galeri);

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $this->summernoteService->imageUpload('galeri'),
            'thumbnail' => $this->uploadService->imageUpload('galeri'),
            'slug' => Str::slug($request->judul),
            'user_id' => auth()->user()->id,
        ]);
           
        return redirect()->route('admin.galeri.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {   
        $this->authorize('delete',$galeri);

        event(new GaleriDeleteEvent($galeri));
        
        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success','Data berhasil dihapus');
    }

    public function view()
    {
        // Check if the view file exists
        if (!View::exists('galeri.index')) {
            // If the view file doesn't exist, return a 404 error view
            return response()->view('errors.404', [], 404);
        }
        
        $galeri = Galeri::with(['user',])->latest()->paginate(4);
        return view('galeri.index',compact('galeri'));
    }

    
}