<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019/3/26
 * Time: 14:01
 */

function quickSort($arr) {

//    将数据根据一个值按照大小分成左右两边，左边小于此值，右边大于
//    将两边数据进行递归调用步骤1
//    将所有数据合并
    if (count($arr) <= 1) {
        return $arr;
    }

    $current = current($arr);
    $low = [];
    $height = [];
    $mid = [];
    foreach ($arr as $v) {
        if ($v > $current) {
            $height[] = $v;
        } elseif ($v < $current) {
            $low[] = $v;
        } else {
            $mid[] = $v;
        }
    }

    $low = quickSort($low);
    $height = quickSort($height);

    return array_merge($low, $mid, $height);
}



$rst = quickSort([1, 4, 3, 9, 40, 20 -12 , 1.2]);
var_dump($rst);