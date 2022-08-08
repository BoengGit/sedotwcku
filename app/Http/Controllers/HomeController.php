<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use App\Perusahaan;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $pelanggan = Pelanggan::count();
        $perusahaan = Perusahaan::count();
        return view('home', compact('user','perusahaan','pelanggan'));
    }
}
