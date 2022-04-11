<?php

namespace App\Http\Controllers;

use App\Models\soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $data = soal::all();

        return view('soal.index', compact('data'));
    }
    public function tambah()
    {
        return view('soal.tambah');
    }
    public function store(Request $request)
    {
        $data = soal::tambah($request->all());
        return redirect('soal');
    }
}
