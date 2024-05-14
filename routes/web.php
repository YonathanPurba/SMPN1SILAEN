<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\UsersController;




//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\TenagaPengajarController;

use App\Models\TenagaPengajar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

//Artikel
Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel');
Route::get('/artikel/search',[ArtikelController::class,'search'])->name('artikel.search');

Route::get('/artikel/{artikel:slug}',[ArtikelController::class,'show'])->name('artikel.show');


//search 

//Pengumuman
Route::get('/pengumuman',[PengumumanController::class,'index'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman:slug}',[PengumumanController::class,'show'])->name('pengumuman.show');


//Prestasi
Route::get('/prestasi',[PrestasiController::class,'view'])->name('prestasi');

//Fasilitas
Route::get('/fasilitas',[ProfilController::class,'fasilitas'])->name('fasilitas');

//Profil
Route::get('/visimisi',[ProfilController::class,'visimisi'])->name('visimisi');
Route::get('/identitas',[ProfilController::class,'identitas'])->name('identitas');
Route::get('/tenagapengajar', [ProfilController::class, 'tenagapengajar'])->name('tenagapengajar');
Route::get('/ekstrakurikuler',[ProfilController::class,'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('tenagapengajar/create', [TenagaPengajarController::class, 'create'])->name('tenagapengajar.create');
Route::get('tenagapengajar.index/delete/{id}', [TenagaPengajarController::class, 'delete']);
Route::post('tenagapengajar', [TenagaPengajarController::class, 'store'])->name('tenagapengajar.store');
Route::get('/tenagapengajar.index', 'TenagaPengajarController@index')->name('tenagapengajar.index');
Route::get('/tenagapengajar/edit/edit/{id}', [TenagaPengajarController::class, 'update'])->name('tenagapengajar.edit');
Route::put('tenagapengajar/edit/{id}', [TenagaPengajarController::class, 'edit'])->name('tenagapengajar.edit.edit');
Route::get('fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
Route::get('/fasilitas.index', [FasilitasController::class,'index'])->name('fasilitas.index');
Route::post('fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
Route::get('fasilitas.index/delete/{id}', [FasilitasController::class, 'delete']);
Route::get('/fasilitas/edit/edit/{id}', [FasilitasController::class, 'update'])->name('fasilitas.edit');
Route::put('fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit.edit');
//Admin
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth']],function(){
	Route::name('admin.')->group(function(){

		Route::get('/',[AdminController::class,'index'])->name('index');
		Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
		Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');
		
		


		//Resource Controller
		Route::resource('users','UsersController');
		Route::resource('pengumuman','PengumumanController');
		Route::resource('agenda','AgendaController');
		Route::resource('artikel','ArtikelController');
		Route::resource('kategori-artikel','KategoriArtikelController');

		
	});
});

//Tenaga Pengajar
