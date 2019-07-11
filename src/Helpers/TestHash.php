<?php

namespace Mukarramishaq\TestHash\Helpers;

class TestHash {
    /**
     * hash function creates a hash of given string in the parameters.
     *
     * @param [type] $str
     * @param integer $size [optional] hash list size
     * @param string $characters [optional] characters string to which the hash key should be mapped
     * @return string hashed value
     * 
     * @static
     */
    public static function hash($str, $size = 5, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $hashArray = array();
        $hash = '';
        for ($i = 0; $i < $size; $i++) {
            $hashArray[$i] = 0;
        }
        for ($s = 0; $s < strlen($str); $s++) {
            for ($i = 0; $i < $size; $i++) {
                $hashArray[$i] = ($hashArray[$i] + ord($str[$s]) + $i + $s + $size) % strlen($characters);
            }
        }
        for ($i = 0; $i < $size; $i++) {
            $hash .= $characters[$hashArray[$i]];
        }
        return $hash;
    }
}