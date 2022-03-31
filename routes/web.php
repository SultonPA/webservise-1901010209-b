<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use app\Http\Controllers\PortofolioController;

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
