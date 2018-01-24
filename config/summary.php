<?php
/**
* 模块栏目配置
* @date: 2018年1月24日 下午12:04:28
* @author: onep2p <324834500@qq.com>
*/

return [
    'alias' => 'news',//模块栏目别名
    'icon'  => 'ios-paper-outline',//模块栏目图标
    'path' => url(app\news\controller\admin\News::class.'@store'),//模块入口地址(路由)
    
    'open' => 'news',//默认打开的侧边一级栏目
    'active' => 'news-list',//默认页面指定
    
    'title' => '新闻',//面包屑一级名称
    'subTitle' => '新闻管理',//面包屑二级名称
    'actionTitle' => '新闻列表',//面包屑三级名称
    'template' => [
        [
            'name' => '新闻管理',
            'alias' => 'news',
            'icon' => 'ios-list-outline',
            'submenu' => [
                ['name' => '新闻列表', 'alias' => 'news-list', 'icon'  => '', 'path'  => ''],
                ['name' => '草稿箱', 'alias' => 'user-role', 'icon'  => '', 'path'  => ''],
                ['name' => '废纸篓', 'alias' => 'access-list', 'icon'  => '', 'path'  => ''],
            ]
        ],
        [
            'name' => '分类管理',
            'alias' => '',
            'icon' => 'ios-color-filter',
            'submenu' => [
                ['name' => '新闻分类', 'alias' => '', 'icon'  => '', 'path'  => ''],
            ]
        ]
    ],
];