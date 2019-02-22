<?php

namespace app\vendor\buildIn\Exceptions;


class FileNotFoundException extends Exception
{
    public function __construct($message = "文件未找到", $code = 404, \Exception $previous = null) {

    }
}

