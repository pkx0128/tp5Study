<?php
    namespace app\user\controller;
    class Manger
    {
        public function index()
        {
            return "This is user controller!";
        }

        public function add($n=0,$m=0)
        {
            return "$n+$m=".($n+$m);
        }
    }

?>