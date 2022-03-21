<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganController extends Controller
{
    public function user(){
        return view('user',[
            'title' => 'Pelanggan',
             // fungsi latest berfungsi untuk menampilkan berdasarkan data terakhir di input
            'pelanggans' => Pelanggan::latest() -> paginate(4)
        ]);
    }
}
