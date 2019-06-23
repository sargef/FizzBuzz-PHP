<?php

require "src/./FizzBuzz.php";

class FizzBuzz extends PHPUnit_Framework_TestCase {

  private $fizzbuzz;

  function __construct() {
    
    $this->fizzbuzz = new Fizzbuzz();
  }
  
  function testResultShouldBeOne()
    
  {
    $result = $this->fizzbuzz->execute(1);
    $this->assertEquals($result, '1');
  }
  
  function testResultShouldBeTwo()
    
  {
    $result = $this->fizzbuzz->execute(2);
    $this->assertEquals($result, '2');
    
  }
  function testResultShouldBeFizz()
  {
    
    $result = $this->fizzbuzz->execute(3);
    $this->assertEquals($result, 'fizz');
    
  }
  function testResultShouldBeBuzz()
  {
    
    $result = $this->fizzbuzz->execute(5);
    $this->assertEquals($result, 'buzz');
    
  }
  
}

 ?>
