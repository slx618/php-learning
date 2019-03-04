<?php
namespace app\vendor\buildIn;

use app\vendor\buildIn\router\Router;

class Application
{

    public function __construct($config)
    {
        require(__DIR__ . DIRECTORY_SEPARATOR . 'standard' . DIRECTORY_SEPARATOR . 'Const.php');
        return $this;
    }


    public function run()
    {

        Router::register();
        //call_user_func();

    }




}