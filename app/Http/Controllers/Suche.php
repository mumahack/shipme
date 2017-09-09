<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Suche extends Controller
{
    public function home(){
        return view('startsite');
    }
    //
    public function suche(){
        return view('stops');
    }
}
