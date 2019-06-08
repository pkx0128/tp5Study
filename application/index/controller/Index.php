<?php
namespace app\index\controller;
use think\Config;
class Index
{
    public function index()
    {
        // 逐个添加配置项
        Config::set("person","pankx");
        // 批量添加配置项
        Config::set(["person"=>"pankx","age"=>29,"salar"=>2000]);
        // 添加二级配置项
        Config::set("car",["bmw"=>100000,"BYD"=>30000]);
        return dump(Config::get());
    }
}
