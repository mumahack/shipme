<?php

namespace App\Http\Controllers;

use App\MapCalculator;

class Suche extends Controller
{
    public function home()
    {
        return view('startsite');
    }

    //
    public function suche()
    {

        $dst = $_POST["dst"];
        $src = $_POST["src"];

        $map = new MapCalculator();
        $result = $map->calculateRoute( $src, $dst);

        return view('stops', array("stops" => $result));
    }

    public function debug(){

        $map = new MapCalculator();
        $result = $map->calculateRoute( 'Hufeisenstraße 10, München', 'Heimpertstrasse 6d, München');
        print_r($result);
    }

    public function stops(){

    }
}
