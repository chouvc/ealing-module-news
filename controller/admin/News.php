<?php
/**
* 后台新闻控制器
* @date: 2017年12月27日 上午9:09:37
* @author: onep2p <324834500@qq.com>
*/
namespace app\news\controller\admin;

use app\ealing\controller\admin\builder\BackstageListBuilder;

class News
{
    /**
    * 获取后台新闻列表数据
    * @date: 2017年12月27日 上午9:09:17
    * @author: onep2p <324834500@qq.com>
    * @param: variable
    * @return:
    */
    public function store()
    {
        $builder = new BackstageListBuilder();

        $list = [];

        $builder->title("新闻列表 - 新闻管理")
            ->buttonNew(url('app\ealing\controller\admin\Index@index'))
            ->setSearchPostUrl(url('index'))
            ->searchText('','title','text',"关键词")
            ->keyText('id',lang('_ID_'))
            ->keyText('title',"名称")
            ->data($list);
        
        return $builder->show();
    }
    
    /**
    * 获取某一篇新闻数据
    * @date: 2017年12月27日 上午9:06:56
    * @author: onep2p <324834500@qq.com>
    * @param: variable
    * @return:
    */
    public function show()
    {
        return 2;
    }
}