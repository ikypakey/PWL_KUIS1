<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function employee(){
        return view('employee',[
            'title' => 'Pegawai',
            'employees' => Pegawai::all()
        ]);
}
}