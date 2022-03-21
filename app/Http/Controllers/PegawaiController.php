<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function employee(){
        return view('employee',[
            'title' => 'Pegawai',
            // fungsi latest berfungsi untuk menampilkan berdasarkan data terakhir di input
            'employees' => Pegawai::latest() -> paginate(4)
        ]);
}
}