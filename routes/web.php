<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kulinerController;
use App\Http\Controllers\olehController;
use App\Http\Controllers\kerajinantanganController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\inputdataController;
use App\Http\Controllers\AuthController;




//buat route home 

Route::get('/home', [homeController::class, 'home']);
//Route::get('/home', [inputdataController::class, 'home'])->name('home'); //suda ada database home
//

//buat route kuliner

Route::get('/kuliner', [kulinerController::class, 'kuliner']);

//

//buat route oleh-oleh

Route::get('/oleholeh', [olehController::class, 'oleholeh']);

//


//buat route kerajinan tangan

Route::get('/test2', [kerajinantanganController::class, 'test2']);

//


//buat route tentang kami

Route::get('/about', [aboutController::class, 'about']);

//


//



//buat route dashboard admin

//Route::get('/dashboard', [dashboardController::class, 'dashboard']);

//









//route di bawa khusus backend 


//////




Route::get('/kategori-semua', [inputdataController::class, 'kategori'])->name('kategori');

//buat sub kategori

Route::get('/kuliner', [inputdataController::class, 'kuliner'])->name('kuliner');
Route::get('/oleholeh', [inputdataController::class, 'oleholeh'])->name('oleholeh');
Route::get('/kerajinantangan', [inputdataController::class, 'kerajinantangan'])->name('kerajinantangan');

//


//untuk input data kontak pada halaman pengguna
Route::get('/create', [ContactController::class, 'create'])->name('create');
// Menyimpan data kontak baru
Route::post('/contacts', [ContactController::class, 'store'])->name('store');
//mengirimkan data kontak
Route::get('/contacts-create', [ContactController::class, 'create'])->name('create');
// 
 
// bagian untuk login 


// Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// route midlleware
// Admin routes
//Route::middleware(['auth:admin'])->group(function () {
  //Route::get('/dashboard', [dashboardController::class, 'dashboard']);
  // Add other admin routes here
//});
//route buat dashboard admin biar engga bisa di akses
Route::middleware(['auth:user'])->group(function () {
 // Route::get('/dashborad', [dashboardController::class, 'dashboard']);
  // Add other admin routes here
  Route::get('/dashboard', [dashboardController::class, 'dashboard']);


  //inputdata
Route::get('/inputdata', [inputdataController::class, 'inputdata'])->name('inputdata');
Route::get('/inputdata/create', [inputdataController::class, 'create'])->name('inputdata.create');
Route::post('/inputdata/store', [inputdataController::class, 'store'])->name('inputdata.store');
Route::get('/inputdata/edit/{id}', [inputdataController::class, 'edit'])->name('inputdata.edit');
Route::put('/inputdata/update/{id}', [inputdataController::class, 'update'])->name('inputdata.update');
Route::delete('/inputdata/destroy/{id}', [inputdataController::class, 'destroy'])->name('inputdata.destroy');
//untuk menambahkan data produk umkm
Route::get('/test', [inputdataController::class, 'test'])->name('test');

// Proses registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
//

// menampilkan tabel login 

Route::get('/riwayat', [AuthController::class, 'riwayat'])->name('riwayat');

// menampilkan untuk edit login 
Route::get('/riwayat/edit/{id}', [AuthController::class, 'edit_login'])->name('edit_login');
Route::put('/riwayat/update/{id}', [AuthController::class, 'update_'])->name('update_login');
Route::delete('/user/delete/{id}', [AuthController::class, 'destroyn'])->name('delete_user');

//


// Menampilkan daftar kontak
Route::get('/contacts', [ContactController::class, 'kontak'])->name('kontak');

// Menampilkan formulir pengeditan kontak
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('edit');

// Memperbarui data kontak yang ada
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('update');

// Menghapus data kontak
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('destroy');

});
















Route::get('/', function () {
    return view('welcome');
});
