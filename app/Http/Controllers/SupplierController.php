<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier(){
        return view('supplier',[
            'title' => 'Supplier',
            'suppliers' => Supplier::latest()-> paginate(4)
        ]);
}
}