<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

Route::group('news', function(){
    //前端路由   可以定义N个版本
    Route::group('v1', function(){
        Route::get('/', 'news/v1.News/store');
        
        Route::group('cates', function(){
            Route::get('/', function(){
                return 123;
            });
        });
        
        Route::get('categories/pinneds', function(){
            return '获取置顶列表';
        });
    });
});