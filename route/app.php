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
use app\middleware\Check;
use think\facade\Route;


Route::resource('index', 'Index');

Route::rule('remove','Index/remove','POST');
Route::rule('modify','Index/modify','POST');
Route::rule('saveUser','Index/saveUser','POST');

Route::rule('reader','Reader/index')/*->middleware(Check::class)*/;
Route::rule('reader_read','Reader/read', 'POST');
Route::rule('reader_borrow','Reader/borrow', 'POST');
Route::rule('reader_return','Reader/return', 'POST');

Route::rule('login','Login/index');
Route::rule('login_check','Login/check', 'POST');
Route::rule('login_hello','Login/hello');


