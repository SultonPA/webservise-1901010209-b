<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function construct()
    {
        $this->middleware('auth');
    }
    public function login()
    {
        return redirect()->route('login');
    }
    public function masuk()
    {
        return redirect()->route('lokasi');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
