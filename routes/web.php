<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoalController;

use app\Http\Controllers\PortofolioController;
use SebastianBergmann\Template\Template;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function () {
    return 'nama saya sulton';
});

Route::get('/sulton', [HomeController::class, 'index'])->name('sulton.index');
route::get('/Abbas', function () {
    return ' nama saya Abbas';
});

route::get('/dari-view', function () {
    return view('home');
});

route::get('/hal1', function () {
    return view('halaman1');
})->name('halaman1');
route::get('/hal2', function () {
    return view('halaman2');
})->name('halaman2');

route::get('/profile', [ProfileController::class, 'home'])->name(('profile'));

// route::get('/Portofolio', [HomeController::class, 'index'])->name('portofolio');
route::get('/portofolio', function () {
    return view('sultonporto');
});
route::get('/admin', function () {
    return view('login');
});
route::view('master', 'template/master');

route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
route::get('add-mahasiswa', [MahasiswaController::class, 'create']);
route::get('mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');

route::get('soal', [SoalController::class, 'index']);
route::get('soal/tambah', [SoalController::class, 'tambah']);
route::get('soal/store', [SoalController::class, 'store'])->name('soal.store');
