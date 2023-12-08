<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SiswasController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=> 'auth'], function(){
Route::get('/master', [MasterController::class,'master'])->name('master');

Route::get('/siswas', [SiswasController::class,'siswas'])->name('siswas');
Route::get('/insertSiswa', [SiswasController::class,'tambahsiswa'])->name('insertSiswa');
Route::post('/insertmahasiswa', [SiswasController::class,'insertmahasiswa'])->name('insertmahasiswa');
Route::get('/siswaDelete/{nim}', [SiswasController::class,'siswaDelete'])->name('siswaDelete');
Route::get('/editSiswa/{id}', [SiswasController::class,'editsiswa'])->name('editSiswa');
Route::post('/updatesiswa/{id}', [SiswasController::class,'updatesiswa'])->name('updatesiswa');
// ===========================================================================================
Route::get('/dosen', [DosenController::class,'dosen'])->name('dosen');
Route::get('/insertDosen', [DosenController::class,'tambahdosen'])->name('insertDosen');
Route::post('/insertdosen', [DosenController::class,'insertdosen'])->name('insertdosen');
Route::get('/dosenDelete/{id}', [DosenController::class,'dosenDelete'])->name('dosenDelete');
Route::get('/editDosen/{id}', [DosenController::class,'editdosen'])->name('editDosen');
Route::post('/updatedosen/{id}', [DosenController::class,'updatedosen'])->name('updatedosen');
// ===========================================================================================
Route::get('/jadwal', [JadwalController::class,'jadwal'])->name('jadwal');
Route::get('/insertJadwal', [JadwalController::class,'tambahjadwal'])->name('insertJadwal');
Route::post('/insertjadwal', [JadwalController::class,'insertjadwal'])->name('insertjadwal');
Route::get('/jadwalDelete/{id}', [JadwalController::class,'jadwalDelete'])->name('jadwalDelete');
Route::get('/editJadwal/{id}', [JadwalController::class,'editjadwal'])->name('editJadwal');
Route::post('/updatejadwal/{id}', [JadwalController::class,'updatejadwal'])->name('updatejadwal');
// ===========================================================================================
Route::get('/matakuliah', [MatakuliahController::class,'matakuliah'])->name('matakuliah');
Route::get('/insertMatakuliah', [MatakuliahController::class,'tambahmatakuliah'])->name('insertMatakuliah');
Route::post('/insertmatakuliah', [MatakuliahController::class,'insertmatakuliah'])->name('insertmatakuliah');
Route::get('/matakuliahDelete/{id}', [MatakuliahController::class,'matakuliahDelete'])->name('matakuliahDelete');
Route::get('/editMatakuliah/{id}', [MatakuliahController::class,'editmatakuliah'])->name('editMatakuliah');
Route::post('/updatematakuliah/{id}', [MatakuliahController::class,'updatematakuliah'])->name('updatematakuliah');
});
// ===========================
Route::get('/masters', [MasterController::class,'mastersiswa'])->name('masters');
Route::get('/jadwals', [JadwalController::class,'jadwals'])->name('jadwals');
Route::get('/dosens', [DosenController::class,'dosens'])->name('dosens');
Route::get('/siswass', [SiswasController::class,'siswass'])->name('siswass');
Route::get('/matakuliahs', [MatakuliahController::class,'matakuliahs'])->name('matakuliahs');
// ===========================

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/loginAdmin', [LoginController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionloginAdmin', [LoginController::class, 'actionloginAdmin'])->name('actionloginAdmin');

// Route::get('mahasiswa', [HomeController::class, 'index'])->name('mahasiswa');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth')
;

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
