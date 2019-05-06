<?php

/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-4-25
 * Time: 18:01
 */

/**
 * Class redisConnection
 */
class redisConnection
{
    private static $_instance;

    private $host = '172.17.1.222';

    private $port = '6379';

    private $pass = '';

    private $database = '0';


    /**
     * @return Redis
     */
    public function __construct()
    {
        return self::getInstance();
    }


    /**
     * @param $host
     * @param $port
     * @param $database
     * @param $pass
     * @return Redis
     */
    public function connect($host, $port, $database, $pass)
    {
        $handle = new Redis();
        $handle->connect($host, $port, 1.0);
        $handle->auth($pass);
        $handle->select($database);
        return $handle;
    }

    /**
     * @return Redis
     */
    private function getInstance()
    {
        if (self::$_instance instanceof Redis) {
            return self::$_instance;
        } else {
            return self::$_instance = $this->connect($this->host, $this->port, $this->database, $this->pass);
        }
    }


    /**
     * @param Redis
     * @param $params
     * @return mixed
     */
    public function __call($funcName, $params)
    {
        try {
            if (method_exists(self::$_instance, $funcName)) {
                return call_user_func_array([self::$_instance, $funcName], $params);
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }

}