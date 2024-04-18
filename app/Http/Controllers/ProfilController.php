<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function visimisi()
    {
    	return view('profil.visimisi');
    }   

    public function identitas()
    {
    	return view('profil.identitas');
    }   

    public function tenagapengajar()
    {
    	return view('profil.tenagapengajar');
    } 
    
    public function ekstrakurikuler()
    {
    	return view('profil.ekstrakurikuler');
    }   
}
