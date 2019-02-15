<?php
//http://php.net/manual/zh/types.comparisons.php#types.comparisions-loose
var_dump('php' == 0); // true
var_dump('php' == 1); // false
var_dump('php' == '0'); // false
var_dump('php' == ''); // false
echo '<hr>';

var_dump([] == 0); // false
var_dump([] == '0'); // false
var_dump([] == false); // true
var_dump([] == null); // true
var_dump([] == ''); // false


