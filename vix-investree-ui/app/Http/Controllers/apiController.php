<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function home(){
        return view('home');
    }

    public function detail(){
        return view('detail');
    }
}
