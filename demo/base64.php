<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-7-19
 * Time: 10:21
 */
function myBase64Encode($str)
{

    //转成ascii
    $arr = str_split($str);
    $ascii = [];
    foreach ($arr as $s) {
        $ascii[] = ord($s);
    }
    //转成2进制 8bit 不足补零
    $dec = array_map('decbin', $ascii);
    $decStr = '';
    foreach ($dec as &$v) {
        $decStr .= str_pad($v, 8, '0', STR_PAD_LEFT);
    }

    // 六位一切割
    $decArr = str_split($decStr, 6);
    //不足六位末尾用0填充 并用=补充
    $padding = str_repeat('=', (6 - strlen(end($decArr))) / 2);
    $last = str_pad(end($decArr), 6, '0', STR_PAD_RIGHT);
    $lastKey = count($decArr) - 1;
    $decArr[$lastKey] = $last;

    $base64Table = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), ['+', '/']);

    //转成10进制
    $base64Str = '';
    foreach ($decArr as $tableKey) {
        $tableKey = bindec($tableKey);
        $base64Str .= $base64Table[$tableKey];
    }

    return $base64Str . $padding;
}


function myBase64Decode($str)
{
    $str = trim($str, '=');

    $base64Table = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), ['+', '/']);
    $base64Table = array_flip($base64Table);
    $words = str_split($str);
    $binStr = '';
    foreach ($words as $word) {
        $binStr .= str_pad(decbin($base64Table[$word]), 6, '0', STR_PAD_LEFT);;
    }

    $count = floor(strlen($binStr) / 8);
    $binStr = substr($binStr, 0, $count * 8);
    $binArr = str_split($binStr, 8);

    $decodeStr = '';
    foreach ($binArr as $dec) {
        $decodeStr .= chr(bindec($dec));
    }

    return $decodeStr;

}


echo myBase64Encode('abdsaaaaaaaaaadsdsdaaaaaaaaa21ghfnl;[]]]olaaaaaaacd');
echo '<br>';
echo base64_encode('abdsaaaaaaaaaadsdsdaaaaaaaaa21ghfnl;[]]]olaaaaaaacd');
echo '<br>';
echo myBase64Decode('YWJkc2FhYWFhYWFhYWFkc2RzZGFhYWFhYWFhYTIxZ2hmbmw7W11dXW9sYWFhYWFhYWNk');
echo '<br>';
echo base64_decode('YWJkc2FhYWFhYWFhYWFkc2RzZGFhYWFhYWFhYTIxZ2hmbmw7W11dXW9sYWFhYWFhYWNk');
