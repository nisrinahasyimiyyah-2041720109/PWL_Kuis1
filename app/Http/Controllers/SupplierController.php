<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier()
    {
    $all_supplier = supplier :: paginate(4);
        return view('blog.supplier', ['blog' => $all_supplier])
                     ->with('title', 'Daftar supplier');
}
}