<?php

namespace App\Http\Controllers;


use App\Models\sulton;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = sulton::all();
        return view('mahasiswa/index', compact('data'));


        return view('mahasiswa/index');
    }

    public function create()
    {
        return view('mahasiswa.create');
    }
}
