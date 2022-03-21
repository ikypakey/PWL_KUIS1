<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    public function shopgrid(){
        return view('shop-grid',[
            'title' => 'Barang',
             // fungsi latest berfungsi untuk menampilkan berdasarkan data terakhir di input
            'barangs' => Barang::latest() -> paginate(6)
        ]);
    }
}
