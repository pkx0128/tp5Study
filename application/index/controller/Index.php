<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        \think\Config::load(APP_PATH.'../config/config.php');
        return dump(\think\Config::get());

    }
}
