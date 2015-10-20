<?php

require('src/SimpleMath.php');

class simpleMathTest extends PHPUnit_Framework_TestCase {
    
    public function testAddOk() {
        $m = new simpleMath();
        $result = $m->add(1, 1);
        $this->assertEquals($result, 2);
    }
    
    public function testSubOk() {
        $m = new simpleMath();
        $result = $m->sub(2, 1);
        $this->assertEquals($result, 1);
    }
} 