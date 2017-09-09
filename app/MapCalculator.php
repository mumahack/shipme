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

        $arr = json_decode($res,true);
        $arr = $arr["routes"][0]["legs"][0]["steps"];
        foreach($arr  as $item){
            $instruction = $item["html_instructions"];
            preg_match_all  ("/<b>(.+?)<\/b>/s",$instruction,$matchArr);
            $instruction = $matchArr[1][1];

            $retArr[] = $instruction;

        }

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
