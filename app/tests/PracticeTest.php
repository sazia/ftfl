<?php
/**
 * Created by PhpStorm.
 * User: lpc8
 * Date: 8/20/14
 * Time: 9:28 AM
 */


class PracticeTest extends PHPUnit_Framework_TestCase{

    public function testHelloWorld(){

        $greeting="Hello World";
        $this->assertTrue( $greeting=='Hello, World');
    }
}