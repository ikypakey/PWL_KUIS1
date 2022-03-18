<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index',[
            'title' => 'Home'
        ]);
    }
    public function checkout(){
        return view('checkout',[
            'title' => 'Checkout'
        ]);
    }
    public function blog(){
        return view('blog',[
            'title' => 'Blog'
        ]);
    }
}
