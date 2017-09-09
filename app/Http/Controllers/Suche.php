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

    public function debug()
    {
        $response = \GoogleMaps::load('directions')
            ->setParam([
                'origin' => 'place_id:ChIJ685WIFYViEgRHlHvBbiD5nE',
                'destination' => 'place_id:ChIJA01I-8YVhkgRGJb0fW4UX7Y',
            ])->get();

        print_r($response);

    }
}
