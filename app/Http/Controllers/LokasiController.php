<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $data = Lokasi::all();

        return view('datalokasi', compact('data'));
    }
    public function tambahlokasi()
    {
        return view('tambahlokasi');
    }

    public function insertlokasi(Request $request)
    {
        $this->validate($request, [
            'negara' => 'required|min:3',
            'provinsi' => 'required |min:3',
            'kabupaten' => 'required |min:3',
            'kecamatan' => 'required |min:3',
            'desa' => 'required |min:3',
            'dusun' => 'required |min:3',
            'kodepos' => 'required | min:6',
        ]);


        Lokasi::create($request->all());
        return redirect()->route('lokasi')->with('success', 'data berhasil ditambahkan');
    }
    public function tampillokasi($id)
    {
        $data = Lokasi::find($id);
        // dd($data);

        return view('tampillokasi', compact('data'));
    }
    public function updatelokasi(Request $request, $id)
    {
        $this->validate($request, [
            'negara' => 'required|min:3',
            'provinsi' => 'required |min:3',
            'kabupaten' => 'required |min:3',
            'kecamatan' => 'required |min:3',
            'desa' => 'required |min:3',
            'dusun' => 'required |min:3',
            'kodepos' => 'required | min:6',
        ]);

        $data = Lokasi::find($id);
        $data->update($request->all());
        return redirect()->route('lokasi')->with('success', 'data berhasil diupdate');
    }
    public function hapuslokasi($id)
    {
        $data = Lokasi::find($id);
        $data->delete();
        return redirect()->route('lokasi')->with('success', 'data berhasil dihapus');
    }
}
