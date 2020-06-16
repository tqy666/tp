<?php
/**
 * Created by PhpStorm.
 * User: tian
 * Date: 2020/6/9
 * Time: 12:34
 */
namespace app\admin\controller;

use app\admin\model\Test1;
use think\Config;
use think\Env;
class Index{

    public function getshow(){

        $newdata = new Test1();
        $result = $newdata->select();
        dump($result);
    }
}