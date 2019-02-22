<?php

$uid = 6693233;
$size = 0;
$second = 0;
$t = 1550818242;
$accesskey = '519f9cab85c8059d17544947k361a827';

$arr = [
    'uid' => 6693233,
    'size' => 0,
    'second' => 0,
    't' => 1550818242,
    'accesskey' => '519f9cab85c8059d17544947k361a827'
];

var_dump($arr);
//ksort($arr);
var_dump($arr);

$str = '';
foreach ($arr as $key => $value) {
    $str .= $key . '=' . $value . '&';
}
//$str = 'accesskey=519f9cab85c8059d17544947k361a827&second=0&size=0&t=1550818242&uid=6693233';
$str = 'uid=6693233&size=0&second=0&t=1550818242&accesskey=519f9cab85c8059d17544947k361a827';
//$str = join('&', $arr);
$str = '519f9cab85c8059d17544947k361a827';
var_dump($str);
var_dump(sha1($str));






$s = 'c3ad45ad3d4fd05b87a080c906528ff1103278c0';
var_dump($s);