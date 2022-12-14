<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//sekolah
Route::get('/sekolah', [App\Http\Controllers\Admin\SekolahController::class, 'index'])->name('sekolah');
Route::get('/sekolah/all', [App\Http\Controllers\Admin\SekolahController::class, 'all'])->name('sekolah-all');
Route::get('/sekolah/edit', [App\Http\Controllers\Admin\SekolahController::class, 'edit'])->name('sekolah-edit');
Route::post('/sekolah/update', [App\Http\Controllers\Admin\SekolahController::class, 'update'])->name('sekolah-update');

//kelas
Route::get('/kelas', [App\Http\Controllers\Admin\KelasController::class, 'index'])->name('kelas');
Route::post('/kelas/store', [App\Http\Controllers\Admin\KelasController::class, 'store'])->name('kelas-store');
Route::get('/kelas/all', [App\Http\Controllers\Admin\KelasController::class, 'all'])->name('kelas-all');
Route::get('/kelas/edit', [App\Http\Controllers\Admin\KelasController::class, 'edit'])->name('kelas-edit');
Route::post('/kelas/update', [App\Http\Controllers\Admin\KelasController::class, 'update'])->name('kelas-update');
Route::delete('/kelas/delete', [App\Http\Controllers\Admin\KelasController::class, 'delete'])->name('kelas-delete');


//jurusan
Route::get('/jurusan', [App\Http\Controllers\Admin\JurusanController::class, 'index'])->name('jurusan');
Route::post('/jurusan/store', [App\Http\Controllers\Admin\JurusanController::class, 'store'])->name('jurusan-store');
Route::get('/jurusan/all', [App\Http\Controllers\Admin\JurusanController::class, 'all'])->name('jurusan-all');
Route::get('/jurusan/edit', [App\Http\Controllers\Admin\JurusanController::class, 'edit'])->name('jurusan-edit');
Route::post('/jurusan/update', [App\Http\Controllers\Admin\JurusanController::class, 'update'])->name('jurusan-update');
Route::delete('/jurusan/delete', [App\Http\Controllers\Admin\JurusanController::class, 'delete'])->name('jurusan-delete');

//mata_pelajaran
Route::get('/mata_pelajaran', [App\Http\Controllers\Admin\MataPelajaranController::class, 'index'])->name('mata-pelajaran');
Route::post('/mata_pelajaran/store', [App\Http\Controllers\Admin\MataPelajaranController::class, 'store'])->name('mata_pelajaran-store');
Route::get('/mata_pelajaran/all', [App\Http\Controllers\Admin\MataPelajaranController::class, 'all'])->name('mata');
Route::get('/mata_pelajaran/edit', [App\Http\Controllers\Admin\MataPelajaranController::class, 'edit'])->name('mata_pelajaran-edit');
Route::post('/mata_pelajaran/update', [App\Http\Controllers\Admin\MataPelajaranController::class, 'update'])->name('mata_pelajaran-update');
Route::delete('/mata_pelajaran/delete', [App\Http\Controllers\Admin\MataPelajaranController::class, 'delete'])->name('mata_pelajaran-delete');

//guru
Route::get('/guru', [App\Http\Controllers\Admin\GuruController::class, 'index'])->name('gurus');
Route::post('/guru/store', [App\Http\Controllers\Admin\GuruController::class, 'store'])->name('guru-store');
Route::get('/guru/all', [App\Http\Controllers\Admin\GuruController::class, 'all'])->name('guru-all');
Route::get('/guru/edit', [App\Http\Controllers\Admin\GuruController::class, 'edit'])->name('guru-edit');
Route::post('/guru/update', [App\Http\Controllers\Admin\GuruController::class, 'update'])->name('guru-update');
Route::delete('/guru/delete', [App\Http\Controllers\Admin\GuruController::class, 'delete'])->name('guru-delete');

//tu
Route::get('/tu', [App\Http\Controllers\Admin\TuController::class, 'index'])->name('tus');
Route::post('/tu/store', [App\Http\Controllers\Admin\TuController::class, 'store'])->name('tu-store');
Route::get('/tu/all', [App\Http\Controllers\Admin\TuController::class, 'all'])->name('tu-all');
Route::get('/tu/edit', [App\Http\Controllers\Admin\TuController::class, 'edit'])->name('tu-edit');
Route::post('/tu/update', [App\Http\Controllers\Admin\TuController::class, 'update'])->name('tu-update');
Route::delete('/tu/delete', [App\Http\Controllers\Admin\TuController::class, 'delete'])->name('tu-delete');


//siswa
Route::get('/siswa', [App\Http\Controllers\Admin\SiswaController::class, 'index'])->name('siswa');
Route::post('/siswa/store', [App\Http\Controllers\Admin\SiswaController::class, 'store'])->name('siswa-store');
Route::get('/siswa/all', [App\Http\Controllers\Admin\SiswaController::class, 'all'])->name('siswa-all');
Route::get('/siswa/edit', [App\Http\Controllers\Admin\SiswaController::class, 'edit'])->name('siswa-edit');
Route::post('/siswa/update', [App\Http\Controllers\Admin\SiswaController::class, 'update'])->name('siswa-update');
Route::delete('/siswa/delete', [App\Http\Controllers\Admin\SiswaController::class, 'delete'])->name('siswa-delete');

//ruangan
Route::get('/ruangan', [App\Http\Controllers\Admin\RuanganController::class, 'index'])->name('ruangan');
Route::post('/ruangan/store', [App\Http\Controllers\Admin\RuanganController::class, 'store'])->name('ruangan-store');
Route::get('/ruangan/all', [App\Http\Controllers\Admin\RuanganController::class, 'all'])->name('ruangan-all');
Route::get('/ruangan/edit', [App\Http\Controllers\Admin\RuanganController::class, 'edit'])->name('ruangan-edit');
Route::post('/ruangan/update', [App\Http\Controllers\Admin\RuanganController::class, 'update'])->name('ruangan-update');
Route::delete('/ruangan/delete', [App\Http\Controllers\Admin\RuanganController::class, 'delete'])->name('ruangan-delete');

//ruangan
Route::get('/penjagaperpus', [App\Http\Controllers\Admin\PenjagaPerpusController::class, 'index'])->name('penjagaperpus');
Route::post('/penjagaperpus/store', [App\Http\Controllers\Admin\PenjagaPerpusController::class, 'store'])->name('penjagaperpus-store');
Route::get('/penjagaperpus/all', [App\Http\Controllers\Admin\PenjagaPerpusController::class, 'all'])->name('penjagaperpus-all');
Route::get('/penjagaperpus/edit', [App\Http\Controllers\Admin\PenjagaPerpusController::class, 'edit'])->name('penjagaperpus-edit');
Route::post('/penjagaperpus/update', [App\Http\Controllers\Admin\PenjagaPerpusController::class, 'update'])->name('penjagaperpus-update');
Route::delete('/penjagaperpus/delete', [App\Http\Controllers\Admin\PenjagaPerpusController::class, 'delete'])->name('penjagaperpus-delete');


require __DIR__.'/auth.php';
