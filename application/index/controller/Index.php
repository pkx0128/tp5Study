<?php
    namespace app\index\controller;

use think\Config;

class Index
    {
        public function index()
        {
            return dump(Config::get());
        }
    }

?>