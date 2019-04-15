<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019/3/26
 * Time: 13:52
 */

function bubbleSort($arr) {
    $len = count($arr);
    $temp = null;
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j +1 ]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    var_dump($arr);
}

$arr = [2, 9, 2, 4, 5, 6];
bubbleSort($arr);