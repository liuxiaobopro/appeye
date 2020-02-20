<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2020/2/20
 * Time: 11:31
 */
namespace app\api\controller\v1;

class News{

    public function index()
    {
        header('Access-Control-Allow-Origin:*');
        return 111122;
    }
}