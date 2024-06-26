<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ChangePasswordController;

//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\JumlahSiswaController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TenagaPengajarController;
use App\Models\Ekstrakulikuler;
use App\Models\Fasilitas;

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
Route::get('/galeri',[GaleriController::class,'view'])->name('galeri.index');
Route::get('/galeri/search',[GaleriController::class,'search'])->name('galeri.search');
Route::get('/galeri/{galeri:slug}',[GaleriController::class,'show'])->name('galeri.show');

//Tenaga Pengajar
Route::get('/tenagapengajar', [TenagaPengajarController::class,'view'])->name('tenagapengajar.index');
Route::get('/tenagapengajar/{tenagapengajar:slug}',[TenagaPengajarController::class,'show'])->name('tenagapengajar.show');

//Jumlah Siswa
Route::get('/jumlahsiswa', [JumlahSiswaController::class,'view'])->name('jumlahsiswa.index');

//Prestasi
Route::get('/prestasi', [PrestasiController::class,'view'])->name('prestasi.index');
Route::get('/prestasi/{prestasi:slug}',[PrestasiController::class,'show'])->name('prestasi.show');

//Fasilitas
Route::get('/fasilitas', [FasilitasController::class,'view'])->name('fasilitas.index');
Route::get('/fasilitas/{fasilitas:slug}',[FasilitasController::class,'show'])->name('fasilitas.show');

//Pengumuman
Route::get('/pengumuman', [PengumumanController::class,'view'])->name('pengumuman.index');
Route::get('/pengumuman/{pengumuman:slug}',[PengumumanController::class,'show'])->name('pengumuman.show');

//Ekstrakurikuler
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class,'view'])->name('ekstrakurikuler.index');
Route::get('/ekstrakurikuler/{ekstrakurikuler:slug}',[EkstrakurikulerController::class,'show'])->name('ekstrakurikuler.show');

//Profil
Route::get('/visimisi',[ProfilController::class,'visimisi'])->name('visimisi');
Route::get('/identitas',[ProfilController::class,'identitas'])->name('identitas');

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
		Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
		Route::put('/fasilitas/edit/{id}', [FasilitasController::class, 'update'])->name('fasilitas.edit.update');
		Route::delete('fasilitas/{id}/delete', [FasilitasController::class, 'delete'])->name('fasilitas.index.delete');
		Route::post('/fasilitas/checkName', [FasilitasController::class, 'checkName'])->name('fasilitas.checkName');

		//Tenaga Pengajar
		Route::get('/tenagapengajar', [TenagaPengajarController::class,'index'])->name('tenagapengajar.index');
		Route::get('/tenagapengajar/create', [TenagaPengajarController::class, 'create'])->name('tenagapengajar.create');
		Route::post('/tenagapengajar', [TenagaPengajarController::class, 'store'])->name('tenagapengajar.store');
		Route::delete('tenagapengajar/{id}/delete', [TenagaPengajarController::class, 'delete'])->name('tenagapengajar.index.delete');
		Route::get('/tenagapengajar/edit/{id}', [TenagaPengajarController::class, 'edit'])->name('tenagapengajar.edit');
		Route::put('/tenagapengajar/edit/{id}', [TenagaPengajarController::class, 'update'])->name('tenagapengajar.edit.update');
		Route::post('/tenagapengajar/checkNIP', [TenagaPengajarController::class, 'checkNIP'])->name('tenagapengajar.checkNIP');
		Route::get('/tenagapengajar/aktif/{id}', [TenagaPengajarController::class, 'aktif'])->name('tenagapengajar.aktif');
		Route::get('/tenagapengajar/nonaktif/{id}', [TenagaPengajarController::class, 'nonaktif'])->name('tenagapengajar.nonaktif');


		//Prestasi
		Route::get('/prestasi', [PrestasiController::class,'index'])->name('prestasi.index');
		Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('prestasi.create');
		Route::post('/prestasi', [PrestasiController::class, 'store'])->name('prestasi.store');
		Route::delete('prestasi/{id}/delete', [PrestasiController::class, 'delete'])->name('prestasi.index.delete');
		Route::get('/prestasi/edit/{id}', [PrestasiController::class, 'edit'])->name('prestasi.edit');
		Route::put('/prestasi/edit/{id}', [PrestasiController::class, 'update'])->name('prestasi.edit.update');
		Route::post('/prestasi/checkTitle', [PrestasiController::class, 'checkTitle'])->name('prestasi.checkTitle');

		//Ekstrakurikuler
		Route::get('/ekstrakurikuler', [EkstrakurikulerController::class,'index'])->name('ekstrakurikuler.index');
		Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('ekstrakurikuler.create');
		Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('ekstrakurikuler.store');
		Route::delete('ekstrakurikuler/{id}/delete', [EkstrakurikulerController::class, 'delete'])->name('ekstrakurikuler.index.delete');
		Route::get('/ekstrakurikuler/edit/{id}', [EkstrakurikulerController::class, 'edit'])->name('ekstrakurikuler.edit');
		Route::put('/ekstrakurikuler/edit/{id}', [EkstrakurikulerController::class, 'update'])->name('ekstrakurikuler.edit.update');
		Route::post('/ekstrakurikuler/checkTitle', [EkstrakurikulerController::class, 'checkTitle'])->name('ekstrakurikuler.checkTitle');

		//Kelas
		Route::get('/kelas', [KelasController::class,'index'])->name('kelas.index');
		Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
		Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
		Route::delete('kelas/{id}/delete', [KelasController::class, 'delete'])->name('kelas.index.delete');
		Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
		Route::put('/kelas/edit/{id}', [KelasController::class, 'update'])->name('kelas.edit.update');
		Route::post('/kelas/checkName', [KelasController::class, 'checkName'])->name('kelas.checkName');

		//Galeri
		Route::get('/galeri', [GaleriController::class,'index'])->name('galeri.index');
		Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
		Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');
		Route::delete('galeri/{id}/delete', [GaleriController::class, 'delete'])->name('galeri.index.delete');
		Route::get('/galeri/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
		Route::put('/galeri/edit/{id}', [GaleriController::class, 'update'])->name('galeri.edit.update');
		Route::post('/galeri/checkTitle', [GaleriController::class, 'checkTitle'])->name('galeri.checkTitle');

		//Kepala Sekolah
		Route::get('/kepalasekolah', [KepalaSekolahController::class,'index'])->name('kepalasekolah.index');
		Route::get('/kepalasekolah/create', [KepalaSekolahController::class, 'create'])->name('kepalasekolah.create');
		Route::post('/kepalasekolah', [KepalaSekolahController::class, 'store'])->name('kepalasekolah.store');
		Route::delete('kepalasekolah/{id}/delete', [KepalaSekolahController::class, 'delete'])->name('kepalasekolah.index.delete');
		Route::get('/kepalasekolah/edit/{id}', [KepalaSekolahController::class, 'edit'])->name('kepalasekolah.edit');
		Route::put('/kepalasekolah/edit/{id}', [KepalaSekolahController::class, 'update'])->name('kepalasekolah.edit.update');

		Route::get('/jumlah_siswa', [JumlahSiswaController::class,'index'])->name('jumlah_siswa.index');
		Route::get('/jumlah_siswa/create', [JumlahSiswaController::class, 'create'])->name('jumlah_siswa.create');
		Route::post('/jumlah_siswa', [JumlahSiswaController::class, 'store'])->name('jumlah_siswa.store');
		Route::delete('jumlah_siswa/{id}/delete', [JumlahSiswaController::class, 'delete'])->name('jumlah_siswa.index.delete');
		Route::get('/jumlah_siswa/edit/{id}', [JumlahSiswaController::class, 'edit'])->name('jumlah_siswa.edit');
		Route::put('/jumlah_siswa/edit/{id}', [JumlahSiswaController::class, 'update'])->name('jumlah_siswa.edit.update');
		Route::get('/jumlah_siswa/total_laki_laki', [JumlahSiswaController::class, 'totalLakiLaki'])->name('jumlah_siswa.total_laki_laki');

		//Users
		// web.php

		Route::post('/users/check-email', [UsersController::class, 'checkEmail'])->name('users.checkEmail');


		//Resource Controller
		Route::resource('users','UsersController');
		Route::resource('pengumuman','PengumumanController');

		
	});
});
