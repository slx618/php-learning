<?php
//https://segmentfault.com/a/1190000010748235#articleHeader5
//http://php.net/manual/zh/types.comparisons.php#types.comparisions-loose
//松散比较 对着表理解
$arr = ['a', 'pro' => 'php', 8, true];
var_dump(in_array(2, $arr)); // bool(true)
var_dump(in_array('b', $arr)); // bool(true)
var_dump(in_array(0, $arr)); // bool(true)
var_dump(in_array(null, $arr)); // bool(false)
var_dump(in_array(2, $arr, true)); // bool(false)
var_dump(in_array(0, $arr, true)); // bool(false)
$name = 0;
switch ($name) {
     case "a":
          echo 'a1';
          break;
     case "b":
          echo 'b1';
          break;
}
switch (strval($name)) {
     case "a":
          echo 'aa';
          break;
     case "b":
          echo 'bb';
          break;
} 

function test($var) { 
     switch (true) { 
          case 'apple' === $var: 
          echo 'apple', PHP_EOL; 
          break; 
          case 0 === $var: 
          echo '0', PHP_EOL; 
          break; 
          default: 
          echo 'default', PHP_EOL; 
     } 
}    
$arr = array('0', 0, 'apple');

foreach ($arr as $value) {
    test($value);
}  