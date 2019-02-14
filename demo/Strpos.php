<?php
//https://segmentfault.com/a/1190000010748235#articleHeader6

function getReferer($link) {
    $refMap = [
        'baidu' => '百度',
        'sougou' => '搜狗',
        '360' => '360',
        'google' => '谷歌'
    ];
    foreach ($refMap as $key => $value) {
        if (strpos($link, $key) !== false) {
            return $value;
        }
    }
    return '其他';
}
// https://secure.php.net/manual/zh/function.strpos.php 如果 needle 不是一个字符串，那么它将被转换为整型并被视为字符的顺序值。
echo getReferer('https://www.google.com/search?workd=google');//360 
// 解决
function newGetReferer($link) {
    $refMap = [
        'baidu' => '百度',
        'sougou' => '搜狗',
        '360' => '360',
        'google' => '谷歌'
    ];
    foreach ($refMap as $key => $value) {
        if (mb_strpos($link, $key) !== false) {
        //if (strpos($link, strval($key)) !== false) {
            return $value;
        }
    }
    return '其他';
}
echo '<hr>';
echo newGetReferer('https://www.google.com/search?workd=google');
