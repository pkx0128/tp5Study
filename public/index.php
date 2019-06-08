<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 定义配置目录
define('CONF_PATH',__DIR__.'/../config/');
// 定义ini配置文件类型
// define('CONF_EXT','.ini');
// 定义xml配置文件类型
// define('CONF_EXT','.xml');
// 定义json配置文件类型
define('CONF_EXT','.json');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
