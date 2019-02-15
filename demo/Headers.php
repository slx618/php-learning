<?php
// http://php.net/manual/en/function.header.php


var_dump($_SERVER);
var_dump(base64_decode('TlRMTVNTUAABAAAAB4IIogAAAAAAAAAAAAAAAAAAAAAKAO5CAAAADw=='));
die;
if ($_SERVER['PHP_AUTH_USER']) {
    var_dump($_SERVER['PHP_AUTH_USER']);
    var_dump($_SERVER['PHP_AUTH_PW']);
    header("HTTP/1.0 200 Success");
    die;
}
//header('WWW-Authenticate: Basic');
header('WWW-Authenticate: Negotiate');
header('WWW-Authenticate: NTLM');
//header("HTTP/1.0 404 Not Found");
//header('Location: http://www.example.com/');