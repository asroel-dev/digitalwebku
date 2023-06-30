<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/',function($subdomain) {
//     return 'subdomain ' . $subdomain;
// });

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front.index');
Route::get('/berita', [App\Http\Controllers\FrontController::class, 'berita'])->name('beritapage.index');
Route::get('/dokumen', [App\Http\Controllers\FrontController::class, 'dokumen'])->name('dokumenpage.index');
Route::get('/pegawai', [App\Http\Controllers\FrontController::class, 'pegawai'])->name('pegawai.index');
Route::get('/client', [App\Http\Controllers\FrontController::class, 'client'])->name('client.index');
Route::get('/berita/{slug}', [App\Http\Controllers\FrontController::class, 'detailBerita'])->name('beritapage.detail');
Route::get('pengumuman', [App\Http\Controllers\FrontController::class, 'pengumuman'])->name('pengumuman');
Route::get('pengumuman/{slug}', [App\Http\Controllers\FrontController::class, 'detailPengumuman'])->name('pengumuman.detail');
Route::get('agenda', [App\Http\Controllers\FrontController::class, 'agenda'])->name('agenda');
Route::get('agenda/{slug}', [App\Http\Controllers\FrontController::class, 'detailAgenda'])->name('agenda.detail');
Route::get('/halaman/{slug}', [App\Http\Controllers\FrontController::class, 'detailHalaman'])->name('halaman.index');
Route::get('/kategori/{slug}', [App\Http\Controllers\FrontController::class, 'kategori'])->name('kategorifront.index');
Route::get('/galeri-gambar', [App\Http\Controllers\FrontController::class, 'galeriGambar'])->name('galerigambar.page');
Route::get('/chart', [App\Http\Controllers\FrontController::class, 'chart'])->name('chart-front');
Route::get('/chartlabel', [App\Http\Controllers\FrontController::class, 'chartLabel'])->name('chart-label-front');

Route::get('/test/{id}', function($subdomain, $id){
    return 'subdomain ' . $subdomain . $id;
});
