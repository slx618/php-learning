<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-4-29
 * Time: 13:35
 */

$fileName = date('Y-m-d') . '.log';
$fd = fopen($fileName, 'a');
while (true) {
    fwrite($fd, __FILE__ . "\n");
}
fclose($fd);
