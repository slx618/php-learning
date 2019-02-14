<?php
//https://segmentfault.com/a/1190000010748235#articleHeader3
//索引数据 pack array & 关联数组 hash array
$arr1 = array('a' => "one", "b" => "two", 'c' => "three");
$arr2 = array('b' => "new two", 'c' => "new three");
echo '<pre>';
// 保留之前 后面的key 抛弃
print_r($arr1 + $arr2);
// 保留后面的key
print_r(array_merge($arr1, $arr2));

$arr1 = array(1 => "one", 2 => "two", 3 => "three");
$arr2 = array(2 => "new two", 3 => "new three");

// 保留之前
print_r($arr1 + $arr2);
// 索引数组合并
print_r(array_merge($arr1, $arr2));

$arr1 = array(1 => "one", 2 => "two", 3 => "three", 'a' => 'a', 'b' => 'b');
$arr2 = array(2 => "new two", 3 => "new three", 'b' => 'bbb');

// 保留之前
print_r($arr1 + $arr2);
// 索引数组合并
print_r(array_merge($arr1, $arr2));