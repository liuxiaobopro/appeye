<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2020/2/21
 * Time: 11:05
 * 重写核心类Handle.php中的render方法
 */
namespace app\common\lib\exception;

use think\exception\Handle;

class ApiHandleException extends Handle{
    /**
     * http状态码
     * @var int
     */
    public $httpCode = 500;

    public function render(\Exception $e)
    {
        if(config('app_debug')){
            return parent::render($e);
        }
        if ($e instanceof ApiException){
            $this->httpCode = $e->httpCode;
        }
        return show('0', $e->getMessage(), '', $this->httpCode);
    }

}