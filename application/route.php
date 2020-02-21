<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\route;

Route::get('api/:ver/news', 'api/:ver.news/index');
Route::put('api/:ver/news/:id', 'api/:ver.news/update');
Route::delete('api/:ver/news/:id', 'api/:ver.news/delete');
Route::resource('api/:ver/news', 'api/:ver.news');