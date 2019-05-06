<?php

/**
 * Created by PhpStorm.
 * User: slx61
 * Date: 2019-4-25
 * Time: 18:00
 */

class SecKillBiz
{

    public $k = 'secKill:goodsId:';

    //商品库存
    public $goodsLeft;

    //商品介绍
    public $goodsInfo;



    public function __construct($goodsId)
    {
        $this->k .= $goodsId;

    }


    public function pages()
    {
        include 'redisConnection.php';
        $rds = new redisConnection();

        $rds->incr('sss12');
        $rds->set($this->k, 'sss12');
        $rds->setex($this->k, 60, 'sss12');

        echo '我是页面';
    }



    public function kucun()
    {
        echo '我是库存';
    }


    function get_variable_name(&$var, $scope=null){
        $scope = $scope==null? $GLOBALS : $scope; // 如果没有范围则在globals中找寻
        // 因有可能有相同值的变量,因此先将当前变量的值保存到一个临时变量中,然后再对原变量赋唯一值,
        //以便查找出变量的名称,找到名字后,将临时变量的值重新赋值到原变量
        $tmp = $var;
        $var = 'tmp_value_' . mt_rand();
        $name = array_search($var, $scope, true); // 根据值查找变量名称
        $var = $tmp;
        return $name;

    }
}