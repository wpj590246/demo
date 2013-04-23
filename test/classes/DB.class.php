<?php

class DB {

    public $param = 'it is static param </br>';
    function getParam () {
        
        echo $this->param;
    }

    function test() {
        echo 'this is instance call' . '</br>';
    }

    static function stest() {
        echo 'this is static call' . '</br>';
    }

    function __construct() {
        echo 'this is instance create for __construct' . '</br>';
    }
//    function DB($a,$b) { #与上面construct 相同 
//        echo $a.$b;
//    }
    function __destruct() {#每次不管是实例还是静态调用完DB类后都会调用这个方法
        echo 'this is destroied';
    }

}

