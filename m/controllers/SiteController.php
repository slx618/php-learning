<?php

namespace app\controllers;

use app\H;

class SiteController
{
    public function actionIndex()
    {
        H::$app->params;
        die('Hello world ' . self::class);
    }
}