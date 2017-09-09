<?php

namespace App;

use Illuminate\Support\Facades\Cache;

class MapCalculator
{

    public function calculateRoute($src, $dest)
    {
        $hash = md5($src . $dest);
        if (!Cache::has($hash)) {
            $response = $this->request($src, $dest);
            Cache::forever($hash, $response);
        }
        $res = Cache::get($hash);

        $arr = json_decode($res, true);
        $time = $arr["routes"][0]["legs"][0]["duration"]["text"];
        $arr = $arr["routes"][0]["legs"][0]["steps"];


        if(count($arr)>5){
            $stepsCounter = (count($arr) / 4);
            for($i = $stepsCounter; $i < count($arr) -1; $i+= $stepsCounter) {
                // Get Stop Name:
                $item= $arr[$i];
                $stopName = $item["html_instructions"];
                preg_match_all("/<b>(.+?)<\/b>/s", $stopName, $matchArr);
                try {
                    $stopName = $matchArr[1][1];
                } catch (\Exception $exception) {
                    continue;
                }

                // Get Time:

                $distanz = $item["distance"]["text"];
                $retArr[] =
                    array("stopName" => $stopName, "distanz" => $distanz, "zusatzZeit" => $time . " + " . rand(5, 30) . " mins");
            }

        }
        else{
        foreach ($arr as $key => $item) {
            if($key == count($arr) || $key == 0){
                continue;
            }
            // Get Stop Name:
            $stopName = $item["html_instructions"];
            preg_match_all("/<b>(.+?)<\/b>/s", $stopName, $matchArr);
            try {
                $stopName = $matchArr[1][1];
            } catch (\Exception $exception) {
                continue;
            }

            // Get Time:

            $distanz = $item["distance"]["text"];
            $retArr[] =
                array("stopName" => $stopName, "distanz" => $distanz, "zusatzZeit" => $time . " + " . rand(5, 30) . " mins");

        }}
        return $retArr;
    }

    public function request($src, $dest)
    {
        $response = \GoogleMaps::load('directions')
            ->setParam([
                'origin' => $src,
                'destination' => $dest,
            ])->get();
        return $response;

    }
}
