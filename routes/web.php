<?php



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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('pesan_saran', PesanSaranController::class);
Route::resource('herosection', HerosectionController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('contact', ContactController::class);
require __DIR__.'/auth.php';
