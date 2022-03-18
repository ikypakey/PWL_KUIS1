<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganController extends Controller
{
    public function user(){
        return view('user',[
            'title' => 'Pelanggan',
            'pelanggans' => Pelanggan::latest() -> paginate(4)
        ]);
    }
}
