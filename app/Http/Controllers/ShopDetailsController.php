<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopDetailsController extends Controller
{
    public function shopdetails(){
        return view('shop-details',[
            'title' => 'Shop Details'
        ]);
    }
}
