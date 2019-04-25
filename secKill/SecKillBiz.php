<?php

/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-4-25
 * Time: 18:00
 */

class SecKillBiz
{



    public function pages()
    {
        include 'redisConnection.php';
        $rds = new redisConnection();
        $str = $rds->get('sss');
        var_dump($str);
        var_dump($rds);
        echo '我是页面';
    }



    public function kucun()
    {
        echo '我是库存';
    }
}