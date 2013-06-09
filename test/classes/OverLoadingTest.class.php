<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OverLoadingTest
 *
 * @author adways
 */
class OverLoadingTest {
    private $_name;
    public function __get($name) {
        $method = "get{$name}";
        $temp_name = '_'.$name;
        echo 'called __get</br>';
        if($this->$temp_name)
            return $this->$temp_name;
        
        if(method_exists($this, $method))
                return $this->$method();
    }
    
    private function getName(){
        return 'it is name</br>';
    }
    public function __set($name, $value) {
        $method = "set{$name}";
        echo 'called __set</br>';
        if(method_exists($this, $method))
                return $this->$method($value);
        
    }
    private function setName($value) {
        $this->_name = $value;
        
    }
}

?>
