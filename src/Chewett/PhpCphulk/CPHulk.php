<?php

namespace Chewett\PhpCphulk;

class CPHulk {

    public static function ip2CphulkFormat($ip) {
        $ipSegments = explode(".", $ip);
        $hexString = '00000000000000000000FFFF';
        foreach($ipSegments as $ipPart) {
            $numAsHex = dechex(intval($ipPart));
            if(strlen($numAsHex) == 1) {
                $numAsHex = "0". $numAsHex;
            }
            $hexString = $hexString .$numAsHex;
        }

        return $binaryToSave = hex2bin($hexString);
    }


}