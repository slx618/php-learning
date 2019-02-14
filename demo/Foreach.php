<?php
$arr=[];
$arr[2] = 2;
$arr[1]  = 1;
$arr[0]  = 0;
foreach ($arr as $key => $val) {
echo $val . "<br>";// 2 1 0 
}
echo '<hr>';
reset($arr);
foreach ($arr as $key => $val) {
    echo $val . "<br>";// 2 1
}
echo '<hr>';
var_dump($arr);
echo '<hr>';
while (list($key, $v) = each($arr)) {
   //获取不到  foreach会自动reset，each之前, 先reset数组的内部指针
   echo $key . $v . '<br>';
}
echo '<hr>';
for($i=0,$l=count($arr); $i<$l; $i++) {
    echo $arr[$i] . '<br>';// 0 1 2
}