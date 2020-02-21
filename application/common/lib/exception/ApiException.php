<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2020/2/21
 * Time: 11:31
 * api内部异常处理类
 */
namespace app\common\lib\exception;

use think\Exception;

class ApiException extends Exception{

    public $message = '';
    public $httpCode = 400;
    public $code = 0;

    /**
     * ApiException constructor.
     * @param string $message
     * @param int $httpCode
     * @param int $code
     */
    public function __construct($message = '', $httpCode = 0, $code = 0)
    {
        $this->message = $message;
        $this->httpCode = $httpCode;
        $this->code = $code;
    }
}
