<?php
/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019/2/22
 * Time: 15:51
 */

namespace app\vendor\buildIn\router;


use app\vendor\buildIn\Exceptions\Exception;
use app\vendor\buildIn\Exceptions\FileNotFoundException;


class Router
{
    public $controller;

    public $action;

    public $uri;



    public static function register()
    {
        list($controller, $action) = static::getPath();
        try {
            self::existConFile($controller);
            $conNameSpace = CONTROLLERS_PATH . ucfirst($controller) . 'Controller';
            $con = new $conNameSpace;
            $action = 'action' . ucfirst($action);
            $con->$action();
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }


    private static function getPath()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $uri = $uri ?: 'site/index';

        $explode = explode('/', $uri);

        if (count($explode) == 1) {
            $explode[1] = 'index';
        }

        return [$explode[0], $explode[1]];
    }



    private static function existConFile($file)
    {
        $conPath = PATH_ROOT . 'controllers' . DIRECTORY_SEPARATOR;
        $conPath .= ucfirst($file) . 'Controller.php';
        if (!is_file($conPath)) {
            throw new FileNotFoundException();
        }
    }


    private static function existFunc($func)
    {

    }
}