<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LanguageController;

Route::get('locale/{locale}', Function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});


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
// });



Route::get('lang/{locale}', [LanguageController::class, 'changeTheLanguage']);



Route::prefix('admin')->group(function () {
    Auth::routes(['register' => false]);

    Route::prefix('dashboard')->group(function () {
        Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('chart', [App\Http\Controllers\HomeController::class, 'chart'])->name('chart');

        Route::prefix('kategori')->group(function () {
            Route::get('', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori.index');
            Route::post('edit', [App\Http\Controllers\KategoriController::class, 'edit'])->name('kategori.edit');
            Route::post('store', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori.store');
            Route::put('update', [App\Http\Controllers\KategoriController::class, 'update'])->name('kategori.update');
            Route::post('destroy', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('kategori.destroy');
        });

        Route::prefix('kategoriberita')->group(function () {
            Route::get('', [App\Http\Controllers\KategoriBeritaController::class, 'index'])->name('kategoriberita.index');
            Route::post('edit', [App\Http\Controllers\KategoriBeritaController::class, 'edit'])->name('kategoriberita.edit');
            Route::post('store', [App\Http\Controllers\KategoriBeritaController::class, 'store'])->name('kategoriberita.store');
            Route::put('update', [App\Http\Controllers\KategoriBeritaController::class, 'update'])->name('kategoriberita.update');
            Route::post('destroy', [App\Http\Controllers\KategoriBeritaController::class, 'destroy'])->name('kategoriberita.destroy');
        });

        Route::prefix('layanan')->group(function () {
            Route::get('', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan.index');
            Route::post('edit', [App\Http\Controllers\LayananController::class, 'edit'])->name('layanan.edit');
            Route::post('store', [App\Http\Controllers\LayananController::class, 'store'])->name('layanan.store');
            Route::put('update', [App\Http\Controllers\LayananController::class, 'update'])->name('layanan.update');
            Route::post('destroy', [App\Http\Controllers\LayananController::class, 'destroy'])->name('layanan.destroy');
        });

        Route::prefix('berita')->group(function () {
            Route::get('', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
            Route::get('create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
            Route::get('{slug}/edit', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
            Route::post('store', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
            Route::put('{id}/update', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');
            Route::post('destroy', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.destroy');
        });

        Route::prefix('halaman')->group(function () {
            Route::get('', [App\Http\Controllers\HalamanController::class, 'index'])->name('halaman.index');
            Route::get('/create', [App\Http\Controllers\HalamanController::class, 'create'])->name('halaman.create');
            Route::get('{slug}/edit', [App\Http\Controllers\HalamanController::class, 'edit'])->name('halaman.edit');
            Route::post('store', [App\Http\Controllers\HalamanController::class, 'store'])->name('halaman.store');
            Route::put('{id}\update', [App\Http\Controllers\HalamanController::class, 'update'])->name('halaman.update');
            Route::post('destroy', [App\Http\Controllers\HalamanController::class, 'destroy'])->name('halaman.destroy');
        });

        // Route::prefix('pengumuman')->group(function () {
        //     Route::get('', [App\Http\Controllers\PengumumanController::class, 'index'])->name('halamanpengumuman.index');
        //     Route::post('edit', [App\Http\Controllers\PengumumanController::class, 'edit'])->name('halamanpengumuman.edit');
        //     Route::post('store', [App\Http\Controllers\PengumumanController::class, 'store'])->name('halamanpengumuman.store');
        //     Route::put('update', [App\Http\Controllers\PengumumanController::class, 'update'])->name('halamanpengumuman.update');
        //     Route::post('destroy', [App\Http\Controllers\PengumumanController::class, 'destroy'])->name('halamanpengumuman.destroy');
        // });


        Route::prefix('agenda')->group(function () {
            Route::get('', [App\Http\Controllers\AgendaController::class, 'index'])->name('agenda.index');
            Route::get('create', [App\Http\Controllers\AgendaController::class, 'create'])->name('agenda.create');
            Route::get('{slug}/edit', [App\Http\Controllers\AgendaController::class, 'edit'])->name('agenda.edit');
            Route::post('store', [App\Http\Controllers\AgendaController::class, 'store'])->name('agenda.store');
            Route::put('{id}/update', [App\Http\Controllers\AgendaController::class, 'update'])->name('agenda.update');
            Route::post('destroy', [App\Http\Controllers\AgendaController::class, 'destroy'])->name('agenda.destroy');
        });
        Route::prefix('pengaduan')->group(function () {
            Route::get('', [App\Http\Controllers\PengaduanController::class, 'index'])->name('pengaduan.index');
            Route::post('edit', [App\Http\Controllers\PengaduanController::class, 'edit'])->name('pengaduan.edit');
            Route::post('store', [App\Http\Controllers\PengaduanController::class, 'store'])->name('pengaduan.store');
            Route::put('update', [App\Http\Controllers\PengaduanController::class, 'update'])->name('pengaduan.update');
            Route::post('destroy', [App\Http\Controllers\PengaduanController::class, 'destroy'])->name('pengaduan.destroy');
        });
        Route::prefix('dokumen')->group(function () {
            Route::get('', [App\Http\Controllers\DokumenController::class, 'index'])->name('dokumen.index');
            Route::post('edit', [App\Http\Controllers\DokumenController::class, 'edit'])->name('dokumen.edit');
            Route::post('store', [App\Http\Controllers\DokumenController::class, 'store'])->name('dokumen.store');
            Route::put('update', [App\Http\Controllers\DokumenController::class, 'update'])->name('dokumen.update');
            Route::post('destroy', [App\Http\Controllers\DokumenController::class, 'destroy'])->name('dokumen.destroy');
        });
        // Route::prefix('profil-website')->group(function () {
        //     Route::get('', [App\Http\Controllers\Identitas::class, 'index'])->name('profil.index');
        //     Route::put('{id}/update', [App\Http\Controllers\Identitas::class, 'update'])->name('profil.update');
        //     Route::get('/about', [App\Http\Controllers\Identitas::class, 'about'])->name('about.index');
        //     Route::put('{id}/about/update', [App\Http\Controllers\Identitas::class, 'updateAbout'])->name('about.update');
        //     Route::get('/operation', [App\Http\Controllers\Identitas::class, 'operation'])->name('operation.index');
        //     Route::get('/license', [App\Http\Controllers\Identitas::class, 'license'])->name('license.index');
        //     Route::put('{id}/operation/update', [App\Http\Controllers\Identitas::class, 'updateOperation'])->name('operation.update');
        //     Route::put('{id}/license/update', [App\Http\Controllers\Identitas::class, 'updateLicense'])->name('license.update');
        //     Route::post('{id}/operations/update', [App\Http\Controllers\Identitas::class, 'updateOperations'])->name('operations.update');
        //     Route::post('{id}/licenses/update', [App\Http\Controllers\Identitas::class, 'updateLicenses'])->name('licenses.update');
        //     Route::get('/values', [App\Http\Controllers\Identitas::class, 'values'])->name('values.index');
        //     Route::post('{id}/values/update', [App\Http\Controllers\Identitas::class, 'updateValues'])->name('values.update');
        //     Route::get('{id}/destory/values', [App\Http\Controllers\Identitas::class, 'deleteValues'])->name('delete.values');

        // });

        Route::prefix('identitas')->group(function () {
            Route::get('', [App\Http\Controllers\IdentitasController::class, 'index'])->name('identitas.index');
            Route::get('/sambutan', [App\Http\Controllers\IdentitasController::class, 'sambutan'])->name('sambutan.index');
            Route::put('{id}/sambutan/update', [App\Http\Controllers\IdentitasController::class, 'updateSambutan'])->name('sambutan.update');
            Route::put('{id}/update', [App\Http\Controllers\IdentitasController::class, 'update'])->name('identitas.update');
        });

        Route::prefix('menu')->group(function () {
            Route::get('', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
            Route::post('/store/menu', [App\Http\Controllers\MenuController::class, 'storeMenu'])->name('menu.store');
            Route::post('{id}/update/menu', [App\Http\Controllers\MenuController::class, 'updateMenu'])->name('menu.update');
            Route::post('{id}/update/menu-detail', [App\Http\Controllers\MenuController::class, 'updateMenuList'])->name('menudetail.update');
            Route::get('{id}/destory/menu', [App\Http\Controllers\MenuController::class, 'deleteMenu'])->name('delete.menu');
            Route::get('{id}/destory/menu-detail', [App\Http\Controllers\MenuController::class, 'deleteMenuList'])->name('deletedetail.menu');
        });


        Route::prefix('user-management')->group(function () {
            Route::get('', [App\Http\Controllers\UserManagementController::class, 'index'])->name('user.index');
            Route::post('edit', [App\Http\Controllers\UserManagementController::class, 'edit'])->name('user.edit');
            Route::post('store', [App\Http\Controllers\UserManagementController::class, 'store'])->name('user.store');
            Route::put('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('user.update');
            Route::post('destroy', [App\Http\Controllers\UserManagementController::class, 'destroy'])->name('user.destroy');
        });

        Route::prefix('galeri')->group(function () {
            Route::get('gambar', [App\Http\Controllers\GaleriController::class, 'gambar'])->name('galeri.gambar');
            Route::post('gambar/store', [App\Http\Controllers\GaleriController::class, 'storeGambar'])->name('galeri.gambarstore');
            Route::post('gambar/edit', [App\Http\Controllers\GaleriController::class, 'editGambar'])->name('galeri.gambaredit');
            Route::post('gambar/update', [App\Http\Controllers\GaleriController::class, 'updateGambar'])->name('galeri.gambarupdate');
            Route::post('gambar/destroy', [App\Http\Controllers\GaleriController::class, 'destroyGambar'])->name('galeri.gambardelete');
        });

        Route::prefix('banner')->group(function () {
            Route::get('', [App\Http\Controllers\BannerController::class, 'index'])->name('banner.index');
            Route::post('store', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.store');
            Route::post('edit', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
            Route::post('update', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update');
            Route::post('destroy', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner.delete');
        });


        Route::prefix('pegawai')->group(function () {
            Route::get('', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai.index');
        });

        Route::prefix('faq')->group(function () {
            Route::get('', [App\Http\Controllers\FaqController::class, 'index'])->name('faq.index');
            Route::post('store', [App\Http\Controllers\FaqController::class, 'store'])->name('faq.store');
            Route::post('edit', [App\Http\Controllers\FaqController::class, 'edit'])->name('faq.edit');
            Route::post('update', [App\Http\Controllers\FaqController::class, 'update'])->name('faq.update');
            Route::post('destroy', [App\Http\Controllers\FaqController::class, 'destroy'])->name('faq.delete');
        });

        Route::prefix('price')->group(function () {
            Route::get('', [App\Http\Controllers\PriceController::class, 'index'])->name('price.index');
            Route::post('store', [App\Http\Controllers\PriceController::class, 'store'])->name('price.store');
            Route::post('edit', [App\Http\Controllers\PriceController::class, 'edit'])->name('price.edit');
            Route::post('update', [App\Http\Controllers\PriceController::class, 'update'])->name('price.update');
            Route::post('destroy', [App\Http\Controllers\PriceController::class, 'destroy'])->name('price.delete');
        });
    });
});
