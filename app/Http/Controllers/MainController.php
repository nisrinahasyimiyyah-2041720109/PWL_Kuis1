<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('blog.home')
                    ->with('title', 'Home');
    }

    public function barang()
    {
        return view('blog.barang')
                    ->with('title', 'Daftar Barang');
    }

    public function pelanggan()
    {
        return view('blog.pelanggan')
                    ->with('title', 'Daftar Pelanggan');
    }

    public function pegawai()
    {
        return view('blog.pegawai')
                    ->with('title', 'Daftar Pegawai');
    }

    public function supplier()
    {
        return view('blog.supplier')
                    ->with('title', 'Daftar Supplier');
    }
}
