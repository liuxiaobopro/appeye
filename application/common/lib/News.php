<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2020/2/21
 * Time: 12:01
 */
namespace app\common\lib;

class News {

    public function __construct()
    {
        //md5签名方式--非简单签名
        header("Content-Type:text/html;charset=UTF-8");
        date_default_timezone_set("PRC");
        $showapi_appid = '148237';  //替换此值,在官网的"我的应用"中找到相关值
        $showapi_secret = 'a6e94297efd44df5b4192e2648cf7e4e';  //替换此值,在官网的"我的应用"中找到相关值
        $paramArr = array(
            'showapi_appid'=> $showapi_appid,
            'channelId'=> "",
            'channelName'=> "",
            'title'=> "足球",
            'page'=> "1",
            'needContent'=> "0",
            'needHtml'=> "0",
            'needAllList'=> "0",
            'maxResult'=> "20",
            'id'=> ""
            //添加其他参数
        );
        //创建参数(包括签名的处理)
        $param = $this->createParam($paramArr,$showapi_secret);
        $url = 'http://route.showapi.com/109-35?'.$param;
        //echo "请求的url:".$url."\r\n";
        $result = file_get_contents($url);
        //echo "返回的json数据:\r\n";
        //print $result.'\r\n';
        $result = json_decode($result);
        //echo "\r\n取出showapi_res_code的值:\r\n";
        //print_r($result->showapi_res_code);
        //echo "\r\n";
        return $result;
    }

    public function createParam ($paramArr,$showapi_secret) {
        $paraStr = "";
        $signStr = "";
        ksort($paramArr);
        foreach ($paramArr as $key => $val) {
            if ($key != '' && $val != '') {
                $signStr .= $key.$val;
                $paraStr .= $key.'='.urlencode($val).'&';
            }
        }
        $signStr .= $showapi_secret;//排好序的参数加上secret,进行md5
        $sign = strtolower(md5($signStr));
        $paraStr .= 'showapi_sign='.$sign;//将md5后的值作为参数,便于服务器的效验
//    echo "排好序的参数:".$signStr."\r\n";
        return $paraStr;
    }
}
