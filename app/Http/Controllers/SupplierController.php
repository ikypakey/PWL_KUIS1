<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier(){
        return view('supplier',[
            'title' => 'Supplier',
             // fungsi latest berfungsi untuk menampilkan berdasarkan data terakhir di input
            'suppliers' => Supplier::latest()-> paginate(4)
        ]);
}
}