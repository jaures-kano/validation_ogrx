<?php

namespace App\Util;

class UtilOgrx
{
    public static function generateInQuery(string $chaine)
    {
        $array = explode(",", $chaine);
        return "'".implode("','",$array)."'";;

    }



    public static function arrayDebug($array)
    {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    }



    public static function cleanJson(array $post)
    {
        $jsonStrip  = stripslashes(json_encode($post[0]['geojson'], JSON_UNESCAPED_UNICODE) );

        return substr($jsonStrip, 1, strlen($jsonStrip)-2);
    }

    public static function getIndexByArray(string $index, array $array)
    {
        $chaine = '';

        for ($i=0; $i<count($array); $i++) {
            $chaine .= "'".$array[$i][$index]."',";
        }

        return substr($chaine, 0, strlen($chaine)-1);
    }

    public static function calculeMoyenne(int $total, int $nbOccurences)
    {
        return $total / $nbOccurences;
    }

}