<?php

namespace App\Http\Controllers;

use App\Models\realmadrid;
use Illuminate\Http\Request;

class RealmadridController extends Controller
{
    public function index()
    {
        $data = realmadrid::all();

        return view('clubreal.index', compact('data'));
    }
}
