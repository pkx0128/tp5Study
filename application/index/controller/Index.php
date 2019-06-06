<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return dump(\think\Config::get());
    }
}
