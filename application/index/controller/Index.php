<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        // 加载任意位置的php文件类型的配置文件
        \think\Config::load(APP_PATH.'../config/config.php');
        // 加载任意位置的xml文件类型的配置文件 
        \think\Config::parse(APP_PATH.'../config/config.xml','xml');
         // 加载任意位置的ini文件类型的配置文件 
         \think\Config::parse(APP_PATH.'../config/config.ini','ini');       
        return dump(\think\Config::get());

    }
}
