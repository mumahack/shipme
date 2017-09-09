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

        $arr = array(
            array("stopName" => "München", "zeit" => "12 Stunden"),
            array("stopName" => "Hamburg", "zeit" => "12 Stunden"),
            array("stopName" => "Berlin", "zeit" => "13 Stunden")
        );
        return view('stops', array("stops" => $arr));
    }

    public function debug(){

        $map = new MapCalculator();
        $result = $map->calculateRoute( 'Hufeisenstraße 10, München', 'Heimpertstrasse 6d, München');
        print_r($result);
    }
}
