<?php


<<<<<<< HEAD
use App\Http\Controllers\HomeSection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutSection;
use App\Http\Controllers\ContactSection;
use App\Http\Controllers\ProductSection;
use App\Http\Controllers\ServiceSection;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PesanSaranController;
use App\Http\Controllers\HerosectionController;

Route::get('/', [HomeSection::class,'index'])->name('home');
Route::get('/abouts', [AboutSection::class,'index'])->name('about');
Route::get('/services', [ServiceSection::class,'index'])->name('service');
Route::get('/products', [ProductSection::class,'index'])->name('product');
Route::get('/contacts', [ContactSection::class,'index'])->name('contact');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->middleware(['auth', 'verified', 'role:admin'])->name('dashboard');
=======

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactSection;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesanSaranController;
use App\Http\Controllers\HerosectionController;
use App\Http\Controllers\HomeSection;


Route::get('/', [HomeSection::class,'index'])->name('home');
Route::get('/contacts', [ContactSection::class,'index'])->name('contact');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
<<<<<<< HEAD

Route::resource('herosection', HerosectionController::class)->middleware('role:admin');
Route::resource('aboutus', AboutusController::class)->middleware('role:admin');
Route::resource('gallery', GalleryController::class)->middleware('role:admin');
Route::resource('service', ServiceController::class)->middleware('role:admin');
Route::resource('product', ProductController::class)->middleware('role:admin');
Route::resource('contact', ContactController::class)->middleware('role:admin');
Route::resource('banner', BannerController::class)->middleware('role:admin');
Route::resource('pesansaran', PesanSaranController::class)->middleware('role:admin');



=======
Route::resource('pesan_saran', PesanSaranController::class);
Route::resource('herosection', HerosectionController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('contact', ContactController::class);
Route::resource('service', ServiceController::class);
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
require __DIR__.'/auth.php';
