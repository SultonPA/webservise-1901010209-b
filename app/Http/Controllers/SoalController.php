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
        $this->validate(
            $request,
            [
                'nama_mk' => 'required',
                'dosen' => 'required|min:10',
                'jumlah_soal' => 'required|numeric',
                'keterangan' => 'required',
            ]
        );
        soal::create($request->all());
        return redirect(url('soal'));
    }
    public function destroy(soal $id)
    {
        $id->delete();
        return redirect(url('soal'));
    }
    public function edit(soal $id)
    {
        // $data = soal::findorfail($id);
        return view('soal.edit', compact('id'));
    }
    public function update(Request $request, soal $id)
    {
        $this->validate(
            $request,
            [
                'nama_mk' => 'required',
                'dosen' => 'required|min:10',
                'jumlah_soal' => 'required|numeric',
                'keterangan' => 'required',
            ]
        );
        $id->update($request->all());
        return redirect(url('soal'));
    }
}
