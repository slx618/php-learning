<?php
//https://segmentfault.com/a/1190000010748235#articleHeader11
//json 解析成 null 写代码时指定 utf-8 without bom 
function remove_utf8_bom($text)
{
    $bom = pack('H*','EFBBBF');
    $text = preg_replace("/^$bom/", '', $text);
    return $text;
}
// ps:PHP导出Excel 可能会乱码，需要写入 BOM头
$content = pack('H*','EFBBBF');
fwrite($fp, $content);