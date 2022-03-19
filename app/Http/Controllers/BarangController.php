<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $all_barang = Barang::paginate(4);

        return view('blog.barang', ['blog' => $all_barang])
                ->with('title', 'Daftar Barang');
    }
    
}
