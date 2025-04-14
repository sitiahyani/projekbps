<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Pengunjung;
use App\Models\Infografis;
use App\Models\Ebook;




// ==============================
// 🌐 HALAMAN UTAMA DAN PUBLIK
// ==============================

// Landingpage utama
Route::get('/', function () {
    $infografis = Infografis::latest()->take(5)->get();
    $ebooks = Ebook::latest()->take(5)->get();
    return view("landingpage.home", compact('infografis', 'ebooks'));
});
// Halaman Tentang
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Halaman landing sebelum login
Route::get('/landing', function () {
    return view('auth.landing'); // Blade: resources/views/auth/landing.blade.php
})->name('login.landing');



// ==============================
// 🔐 LOGIN ADMIN
// ==============================

Route::get('/login/admin', [LoginController::class, 'showAdminLogin'])->name('login.admin');
Route::post('/login/admin', [LoginController::class, 'loginAdmin'])->name('login.admin.submit');



// ==============================
// 🔐 LOGIN & REGISTER USER (DENGAN MIDDLEWARE WEB)
// ==============================

Route::middleware('web')->group(function () {
    
    // Login Pengunjung
    Route::get('/login/user', [LoginController::class, 'showUserLogin'])->name('login.user');
    Route::post('/login/user', [LoginController::class, 'loginUser'])->name('login.user.submit');

    // Login Admin (duplikat, bisa dihapus nanti kalau yakin tidak perlu)
    Route::get('/login/admin', [LoginController::class, 'showAdminLogin'])->name('login.admin');
    Route::post('/login/admin', [LoginController::class, 'loginAdmin'])->name('login.admin.submit');

    // Register Pengunjung
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [LoginController::class, 'registerUser'])->name('register.submit');

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});



// ==============================
// 🔐 REGISTER USER (LUAR GROUP)
// ==============================

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginController::class, 'registerUser'])->name('register.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// ==============================
// 👤 DASHBOARD USER (PENGUNJUNG) - PROTEKSI MIDDLEWARE
// ==============================
Route::middleware(['pengunjung.auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});


// ==============================
// 🛠️ DASHBOARD ADMIN (MIDDLEWARE PROTEKSI)
// ==============================

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});
Route::delete('/admin/hapus/{id}', [LoginController::class, 'destroy'])->name('pengunjung.destroy');

// ==============================
// 👤 DASHBOARD USER - MIDDLEWARE PENGUNJUNG
// ==============================
Route::middleware(['pengunjung.auth'])->group(function () {
    Route::get('/user', [UserController::class, 'index']);
});



// ==============================
// 📊 DATA USER (TANPA PROTEKSI LOGIN)
// ==============================
Route::get('/admin', function () {
    $pengunjung = Pengunjung::all(); // Ambil semua data dari database
    return view('admin.dashboard', compact('pengunjung'));
})->name('admin.dashboard');




// ==============================
// 🧭 DASHBOARD ADMIN STATIC (BANYAK VERSI ROUTE /admin)
// ==============================

// Versi dashboard manual
Route::get('/admin', function () {
    return view('admin.admin_dashboard');
});

// Versi pakai controller LoginController@index
Route::get('/admin', [LoginController::class, 'index'])->name('admin.dashboard');



// ==============================
// 🧩 MENU-MENU ADMIN
// ==============================

Route::get('/admin/pss', function () {
    return view('admin.admin_pss');
});

Route::get('/admin/potik', function () {
    return view('admin.admin_potik');
});

Route::get('/admin/permintaan', function () {
    return view('admin.admin_permintaan');
});
// ===================== KOLEKSI =====================

// Halaman Koleksi di Admin (menampilkan infografis & e-book)
Route::get('/admin/koleksi', [KoleksiController::class, 'indexAdmin'])->name('admin.koleksi.index');

// Simpan infografis dari admin
Route::post('/admin/koleksi/infografis', [KoleksiController::class, 'storeInfografis'])->name('admin.koleksi.infografis');

// Simpan e-book dari admin
Route::post('/admin/koleksi/ebook', [KoleksiController::class, 'storeEbook'])->name('admin.koleksi.ebook');

// Halaman Koleksi di Landing Page (user)
Route::get('/koleksi', [KoleksiController::class, 'indexLanding'])->name('koleksi.landing');
Route::get('/admin/koleksi/edit/{id}/{type}', [KoleksiController::class, 'edit'])->name('admin.koleksi.edit');
Route::delete('/admin/koleksi/delete/{id}/{type}', [KoleksiController::class, 'destroy'])->name('admin.koleksi.destroy');


// ==============================
// 👤 MENU/MENU USER
// ==============================

Route::get('/user', function () {
    return view('user.beranda');
});