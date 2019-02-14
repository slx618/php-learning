<?php

$arr = range(1,3);
foreach($arr as &$v){
    echo $v . '<br>';
}
foreach($arr as $v){
    echo $v . '<br>';
}
echo '<hr>';
# print_r($arr);//[1,2,2]
    
// 解决一
$arr = range(1,3);
foreach($arr as &$v){
    echo $v . '<br>';
}
unset($v);
foreach($arr as $v){
    echo $v . '<br>';
}
echo '<hr>';

# print_r($arr);//[1,2,3]
// 解决二
$arr = range(1,3);
foreach($arr as &$v){
    echo $v . '<br>';
}
foreach($arr as $v2){
    echo $v2 . '<br>';
}
echo '<hr>';

#print_r($arr);//[1,2,3]
// 解决三
$arr = range(1,3);
foreach($arr as &$v){
    echo $v . '<br>';
}
foreach($arr as &$v){
    echo $v . '<br>';
}
# print_r($arr);//[1,2,3]