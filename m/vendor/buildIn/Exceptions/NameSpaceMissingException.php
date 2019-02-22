<?php

namespace app\vendor\buildIn\Exceptions;


class NameSpaceMissingException extends Exception
{
    public function __construct($message = "命名空间丢失", $code = 0, \Exception $previous = null) {

    }
}

