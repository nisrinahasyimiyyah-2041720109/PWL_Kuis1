<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function pegawai()
    {
        $all_pegawai = pegawai :: paginate(4);
        return view('blog.pegawai', ['blog' => $all_pegawai])
                     ->with('title', 'Daftar pegawai');
    }
}
