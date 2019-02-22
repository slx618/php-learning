<?php


class __autoload
{

    private static $loadPath = [
        'app' => __DIR__ . DIRECTORY_SEPARATOR . '..'
    ];


    public static function loader($class) {
        $filePath = self::findPath($class);
        if (is_file($filePath)) {
            require $filePath;
        } else {
            throw new \app\vendor\buildIn\Exceptions\FileNotFoundException();
        }
    }


    private static function findPath($class)
    {
        if ($class) {
            $appId = substr($class, 0, strpos($class, '\\'));
            $path = self::$loadPath[$appId];
            $filePath = substr($class, strlen($appId)) . '.php';
            return str_replace('\\', DIRECTORY_SEPARATOR, $path . $filePath);
        } else {
            throw new \app\vendor\buildIn\Exceptions\NameSpaceMissingException();
        }
    }
}

spl_autoload_register('__autoload::loader');