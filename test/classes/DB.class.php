<?php

class DB {

    public $param = 'it is static param </br>';

    public function getParam() {
        return $this->param;
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
    function __destruct() {#每次是实例调用完DB类后会调用这个方法
        echo 'this is destroied';
    }

    public function setParam($param) {
        $this->param = $param;
    }

}

