<?php 

class simpleMath {
    
    public function add($value1, $value2) {
        return ($value1+$value2);
    }
    
    public function sub($value1, $value2) {
        return ($value1-$value2);
    }
    
    public function negate($value) {
        return ($value*-1);
    }
}