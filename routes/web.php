<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ChangePasswordController;


//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\JumlahSiswaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
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

//Tenaga Pengajar

Route::get('/tenagapengajar', [TenagaPengajarController::class,'view'])->name('tenagapengajar.index');
Route::get('/tenagapengajar/{tenagapengajar:slug}',[TenagaPengajarController::class,'show'])->name('tenagapengajar.show');

//
Route::get('/tenagapengajar', [TenagaPengajarController::class,'view'])->name('tenagapengajar.index');
Route::get('/tenagapengajar/{tenagapengajar:slug}',[TenagaPengajarController::class,'show'])->name('tenagapengajar.show');


//Fasilitas
Route::get('/fasilitas', [FasilitasController::class,'view'])->name('fasilitas.index');
Route::get('/fasilitas/{fasilitas:slug}',[FasilitasController::class,'show'])->name('fasilitas.show');

//Pengumuman
Route::get('/pengumuman', [PengumumanController::class,'view'])->name('pengumuman.index');
Route::get('/pengumuman/{pengumuman:slug}',[PengumumanController::class,'show'])->name('pengumuman.show');

//Prestasi
Route::get('/prestasi',[ProfilController::class,'prestasi'])->name('prestasi.index');

//Profil
Route::get('/visimisi',[ProfilController::class,'visimisi'])->name('visimisi');
Route::get('/identitas',[ProfilController::class,'identitas'])->name('identitas');
Route::get('/ekstrakurikuler',[ProfilController::class,'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/artikel', [ProfilController::class,'artikel'])->name('artikel.index');

//Admin
Route::group(['prefix' => 'admin','middleware' => ['auth']],function(){
	Route::name('admin.')->group(function(){

		Route::get('/',[AdminController::class,'index'])->name('index');
		Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
		Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');
		
		//Fasilitas
		Route::get('/fasilitas', [FasilitasController::class,'index'])->name('fasilitas.index');
		Route::get('/fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
		Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
		// Route::get('/fasilitas/index/delete/{id}', [FasilitasController::class, 'delete']);
		Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
		Route::put('/fasilitas/edit/{id}', [FasilitasController::class, 'update'])->name('fasilitas.edit.update');
		Route::delete('fasilitas/{id}/delete', [FasilitasController::class, 'delete'])->name('fasilitas.index.delete');

		//Tenaga Pengajar
		Route::get('/tenagapengajar', [TenagaPengajarController::class,'index'])->name('tenagapengajar.index');
		Route::get('/tenagapengajar/create', [TenagaPengajarController::class, 'create'])->name('tenagapengajar.create');
		Route::post('/tenagapengajar', [TenagaPengajarController::class, 'store'])->name('tenagapengajar.store');
		Route::delete('tenagapengajar/{id}/delete', [TenagaPengajarController::class, 'delete'])->name('tenagapengajar.index.delete');
		Route::get('/tenagapengajar/edit/{id}', [TenagaPengajarController::class, 'edit'])->name('tenagapengajar.edit');
		Route::put('/tenagapengajar/edit/{id}', [TenagaPengajarController::class, 'update'])->name('tenagapengajar.edit.update');

		//Prestasi
		Route::get('/prestasi', [PrestasiController::class,'index'])->name('prestasi.index');
		Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('prestasi.create');
		Route::post('/prestasi', [PrestasiController::class, 'store'])->name('prestasi.store');
		Route::delete('prestasi/{id}/delete', [PrestasiController::class, 'delete'])->name('prestasi.index.delete');
		Route::get('/prestasi/edit/{id}', [PrestasiController::class, 'edit'])->name('prestasi.edit');
		Route::put('/prestasi/edit/{id}', [PrestasiController::class, 'update'])->name('prestasi.edit.update');

		//Ekstrakulikuler
		Route::get('/ekstrakulikuler', [EkstrakulikulerController::class,'index'])->name('ekstrakulikuler.index');
		Route::get('/ekstrakulikuler/create', [EkstrakulikulerController::class, 'create'])->name('ekstrakulikuler.create');
		Route::post('/ekstrakulikuler', [EkstrakulikulerController::class, 'store'])->name('ekstrakulikuler.store');
		Route::delete('ekstrakulikuler/{id}/delete', [EkstrakulikulerController::class, 'delete'])->name('ekstrakulikuler.index.delete');
		Route::get('/ekstrakulikuler/edit/{id}', [EkstrakulikulerController::class, 'edit'])->name('ekstrakulikuler.edit');
		Route::put('/ekstrakulikuler/edit/{id}', [EkstrakulikulerController::class, 'update'])->name('ekstrakulikuler.edit.update');

		//Ekstrakulikuler
		Route::get('/kelas', [KelasController::class,'index'])->name('kelas.index');
		Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
		Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
		Route::delete('kelas/{id}/delete', [KelasController::class, 'delete'])->name('kelas.index.delete');
		Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
		Route::put('/kelas/edit/{id}', [KelasController::class, 'update'])->name('kelas.edit.update');

		Route::get('/jumlah_siswa', [JumlahSiswaController::class,'index'])->name('jumlah_siswa.index');
		Route::get('/jumlah_siswa/create', [JumlahSiswaController::class, 'create'])->name('jumlah_siswa.create');
		Route::post('/jumlah_siswa', [JumlahSiswaController::class, 'store'])->name('jumlah_siswa.store');
		Route::delete('jumlah_siswa/{id}/delete', [JumlahSiswaController::class, 'delete'])->name('jumlah_siswa.index.delete');
		Route::get('/jumlah_siswa/edit/{id}', [JumlahSiswaController::class, 'edit'])->name('jumlah_siswa.edit');
		Route::put('/jumlah_siswa/edit/{id}', [JumlahSiswaController::class, 'update'])->name('jumlah_siswa.edit.update');
		Route::get('/jumlah_siswa/total_laki_laki', [JumlahSiswaController::class, 'totalLakiLaki'])->name('jumlah_siswa.total_laki_laki');

		//Users

		//Resource Controller
		Route::resource('users','UsersController');
		Route::resource('pengumuman','PengumumanController');
		// Route::resource('artikel','ArtikelController');
		Route::resource('galeri','GaleriController');
		Route::resource('kategori-artikel','KategoriArtikelController');

		
	});
});