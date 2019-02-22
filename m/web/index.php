<?php

#文件入口

require (__DIR__ . '/../vendor/__autoload.php');
$config = require (__DIR__ . '/../config/main.php');



(new \app\vendor\buildIn\Application($config))->run();