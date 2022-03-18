<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopingCartController extends Controller
{
     public function shopingcarts(){
        return view('shoping-cart',[
            'title' => 'Shoping Cart'
        ]);
    }
}
