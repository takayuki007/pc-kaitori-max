<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function new(){
        return view('shop.new');
    }

    public function show()
    {
        return view('shop.show');
    }
}
