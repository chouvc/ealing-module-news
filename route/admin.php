<?php
use think\Route;
use app\news\controller\admin as ADMIN;


//后端路由
Route::group('news', function(){
    Route::get('/', ADMIN\News::class.'@store');
});