<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2020/2/20
 * Time: 11:31
 */
namespace app\api\controller\v1;

use think\Controller;
use app\common\lib\exception\ApiException;

class News extends Controller {

    public function index()
    {
//        header('Access-Control-Allow-Origin:*');
        $data['a'] = 'aaaaaa';
        $data['b'] = 'bbbbbb';
        return $data;
    }

    public function update($id = 0)
    {
        halt($id);
    }

    public function delete($id = 0)
    {
        halt($id);
    }

    public function save()
    {
        $input = input('post.');
        if($input['mt'] == 1){
            throw new ApiException('等于1', 400);
        }
        return show('1', 'ok', input('post.'), 200);
    }
}