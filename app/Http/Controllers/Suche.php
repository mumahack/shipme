<?php

namespace App\Http\Controllers;

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
}
