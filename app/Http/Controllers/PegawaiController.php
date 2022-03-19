<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $all_pegawai = Pegawai::paginate(4);
        return view('blog.pegawai', ['blog' => $all_pegawai])
                     ->with('title', 'Daftar Pegawai');
    }
}
