<?php
/**
 * Created by PhpStorm.
 * User: slx618
 * Date: 2021/09/14
 * Time: 12:38
 */


function binarySearch($arr, $lookfor) {

    $low = 0;
    $height = count($arr) - 1;
    while ($low <= $height) {
        $mid = (($low + $height) / 2);
        if ($arr[$mid] > $lookfor) {
            $height = $mid + 1;
        } elseif ($arr[$mid] < $lookfor) {
            $low = $mid + 1;
        } else {
            return $mid;
        }
    }
    return -1;
}



$arr = range(1, 1000000);
$lookfor = 1024;
$rst = binarySearch($arr, $lookfor);

var_dump($rst, $arr[$rst]);

