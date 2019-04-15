<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-4-15
 * Time: 14:59
 * PHP 7.1
 */


function myArray(array $arr = null): array {
    return $arr;
}

//function myString(string $str): string {
//    return $str;
//}

//var_dump(myString('sss'));
//var_dump(myString([23])); //Fatal Error

//类型约束允许 NULL 值
var_dump(myArray([1]));
