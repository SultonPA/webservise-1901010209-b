<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Auth;


use app\Http\Controllers\PortofolioController;
use SebastianBergmann\Template\Template;

Route::get('/', function () {
    return view('home');
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

route::get('soal', [SoalController::class, 'index'])->middleware('auth');
route::get('soal/tambah', [SoalController::class, 'tambah']);

route::post('save-soal', [SoalController::class, 'store']);
route::delete('delete-soal/{id}', [SoalController::class, 'destroy'])->name('delete.soal');
route::get('soal-edit/{id}', [SoalController::class, 'edit'])->name('edit.soal');

route::patch('update-soal/{id}', [SoalController::class, 'update'])->name('update.soal');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/masuk', [App\Http\Controllers\HomeController::class, 'masuk'])->name('masuk');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get(
    '/logout',
    [
        'users' => 'PostController@logout',
        'as'   => 'logout'
    ]
);

//uts



route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');

route::get('/tambahlokasi', [LokasiController::class, 'tambahlokasi'])->name('tambahlokasi');

route::post('/insertlokasi', [LokasiController::class, 'insertlokasi'])->name('insertlokasi');

route::get('/tampillokasi/{id}', [LokasiController::class, 'tampillokasi'])->name('tampillokasi');

route::post('/updatelokasi/{id}', [LokasiController::class, 'updatelokasi'])->name('updatelokasi');

route::get('/hapuslokasi/{id}', [LokasiController::class, 'hapuslokasi'])->name('hapuslokasi');


//coba
route::view('/wisata', 'wisatasesaot.wisata');
route::view('/pesantiket', 'wisatasesaot.pesantiket');
route::view('/struk', 'wisatasesaot.struk');
