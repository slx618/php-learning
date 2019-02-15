<?php

function myFun(... $arr) {
    var_dump($arr);
    $res = func_get_args();
    var_dump($res);
}


myFun(1, 2, 3, 4, 5, '232', [2 => '22222']);