<?php
// 定义一条动态路由规则（路由中有变量传入的为动态路由）
    think\Route::rule('test/:name','edu/test/test','GET',['ext'=>'html'],['name'=>'\w{1,10}']);

?>