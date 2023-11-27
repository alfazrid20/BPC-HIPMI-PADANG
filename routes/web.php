<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;











/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

route::get('/', [HomeController::class, 'index']);
route::get('/about', [HomeController::class, 'about']);
route::get('/sejarah', [HomeController::class, 'sejarah']);
route::get('/struktur', [HomeController::class, 'struktur']);
route::get('/kontak', [HomeController::class, 'kontak']);
route::get('/berita', [HomeController::class, 'berita']);
route::get('/galeri', [HomeController::class, 'galeri']);
route::get('/singlepost/{slug}', [HomeController::class, 'singlepost']);



// route landingpage


// route user
route::get('data-user', [UserController::class, 'index'])->name('data.user');
route::get('tambah-user', [UserController::class, 'tambah'])->name('tambah.user');
route::post('input-user', [UserController::class, 'input'])->name('input.user');
route::get('ubah-user/{id}', [UserController::class, 'edit'])->name('ubah.user');
route::put('update-user/{id}', [UserController::class, 'ubah'])->name('edit.user');
route::delete('delete-user/{id}', [UserController::class, 'delete'])->name('delete.user');


// route berita
route::get('data-berita', [BeritaController::class, 'index'])->name('data.berita');
route::get('tambah-berita', [BeritaController::class, 'tambah'])->name('tambah.berita');
route::post('input-berita', [BeritaController::class, 'input'])->name('input.berita');
route::get('ubah-berita/{id}', [BeritaController::class, 'edit'])->name('ubah.berita');
route::put('update-berita/{id}', [BeritaController::class, 'ubah'])->name('edit.berita');
route::delete('delete-berita/{id}', [BeritaController::class, 'delete'])->name('delete.berita');
route::get('print-berita', [BeritaController::class, 'print'])->name('print.berita');


// route kategori
route::get('data-kategori', [KategoriController::class, 'index'])->name('data.kategori');
route::get('tambah-kategori', [KategoriController::class, 'tambah'])->name('tambah.kategori');
route::post('input-kategori', [KategoriController::class, 'input'])->name('input.kategori');
route::get('ubah-kategori/{id}', [KategoriController::class, 'ubah'])->name('ubah.kategori');
route::put('update-kategori/{id}', [KategoriController::class, 'edit'])->name('edit.kategori');
route::delete('delete-kategori/{id}', [KategoriController::class, 'delete'])->name('delete.kategori');

// route about
route::get('data-about', [AboutController::class, 'index'])->name('data.about');
route::get('tambah-about', [AboutController::class, 'tambah'])->name('tambah.about');
route::post('input-about', [AboutController::class, 'input'])->name('input.about');
route::get('ubah-about/{id}', [AboutController::class, 'ubah'])->name('ubah.about');
route::put('update-about/{id}', [AboutController::class, 'edit'])->name('edit.about');
route::delete('delete-about/{id}', [AboutController::class, 'delete'])->name('delete.about');

// route struktur
route::get('data-struktur', [StrukturController::class, 'index'])->name('data.struktur');
route::get('tambah-struktur', [StrukturController::class, 'tambah'])->name('tambah.struktur');
route::post('input-struktur', [StrukturController::class, 'input'])->name('input.struktur');
route::put('update-struktur/{id}', [StrukturController::class, 'ubah'])->name('ubah.struktur');
route::get('ubah-struktur/{id}', [StrukturController::class, 'edit'])->name('edit.struktur');
route::delete('delete-struktur/{id}', [StrukturController::class, 'delete'])->name('delete.struktur');

// route contact

route::get('data-contact', [ContactController::class, 'index'])->name('data.contact');
route::get('tambah-contact', [ContactController::class, 'tambah'])->name('tambah.contact');
route::post('input-contact', [ContactController::class, 'input'])->name('input.contact');
route::get('ubah-contact/{id}', [ContactController::class, 'ubah'])->name('ubah.contact');
route::put('update-contact/{id}', [ContactController::class, 'edit'])->name('edit.contact');
route::delete('delete-contact/{id}', [ContactController::class, 'delete'])->name('delete.contact');

// route visimisi

route::get('data-visimisi', [VisiMisiController::class, 'index'])->name('data.visimisi');
route::get('tambah-visimisi', [VisiMisiController::class, 'tambah'])->name('tambah.visimisi');
route::post('input-visimisi', [VisiMisiController::class, 'input'])->name('input.visimisi');
route::get('ubah-visimisi/{id}', [VisiMisiController::class, 'ubah'])->name('ubah.visimisi');
route::put('update-visimisi/{id}', [VisiMisiController::class, 'edit'])->name('edit.visimisi');
route::delete('delete-visimisi/{id}', [VisiMisiController::class, 'delete'])->name('delete.visimisi');

// route slider

route::get('data-slider', [SliderController::class, 'index'])->name('data.slider');
route::get('tambah-slider', [SliderController::class, 'tambah'])->name('tambah.slider');
route::post('input-slider', [SliderController::class, 'input'])->name('input.slider');
route::put('update-slider/{id}', [SliderController::class, 'ubah'])->name('ubah.slider');
route::get('ubah-slider/{id}', [SliderController::class, 'edit'])->name('edit.slider');
route::delete('delete-slider/{id}', [SliderController::class, 'delete'])->name('delete.slider');

