<?php

/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-4-25
 * Time: 18:01
 */

class redisConnection
{
    private static $_instance;

    private $host = '192.168.41.80';

    private $port = '6379';

    private $pass = 'erp6394';

    private $database = '11';



    public function __construct()
    {
       return self::getInstance();
    }


    public function connect($host, $port, $database, $pass)
    {
        $handle = new Redis();
        $handle->connect($host, $port, 1.0);
        $handle->auth($pass);
        $handle->select($database);
        return $handle;
    }

    private function getInstance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        } else {
            return self::$_instance = $this->connect($this->host, $this->port, $this->database, $this->pass);
        }
    }


    public function get($key)
    {
        return $this->get($key);
    }

}