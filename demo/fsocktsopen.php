<?php

$url = 'http://roll.news.sina.com.cn/news/gnxw/zs-pl/index_1.shtml';
$hostInfo = parse_url($url);
//$query = $hostInfo['path'];
//echo "Query:".$query;die;
$handle = fsockopen($hostInfo['host'], 80, $errno, $errstr, 5);

if (!$handle) {
    echo $errno . '-' . $errstr;
} else {
    $request = "GET " . $hostInfo['path'] . " HTTP/1.1\r\n";
    $request .= "Host: " . $hostInfo['host'] . "\r\n";
    $request .= "Connection: Close\r\n";
    $request.="\r\n";
    fwrite($handle, $request);
}
$contents = '';
while (! feof ( $handle )) {
    $contents  .=  fread ( $handle ,  8192 );
}
$contents = iconv('GBK', 'UTF-8//ignore', $contents);
fclose ( $handle );
var_dump($contents);