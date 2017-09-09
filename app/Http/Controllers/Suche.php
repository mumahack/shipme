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
        $result = $map->calculateRoute($src, $dst);

        return view('stops', array("stops" => $result, "json" => json_encode($result)));
    }


    public function debug()
    {

        $map = new MapCalculator();
        $result = $map->calculateRoute('Hufeisenstraße 10, München', 'Heimpertstrasse 6d, München');
        print_r($result);
    }

    public function stops()
    {


        $json = $_POST["serialized"];
        $jsonResult = json_decode($json, true);
        foreach ($_POST["checked"] as $item) {
            $result[] = $jsonResult[$item];
        }
        return view('choosenstops', array("stops" => $result, "json" => json_encode($result)));

    }
}
