<?php

require "src/./FizzBuzz.php";

class FizzBuzz extends PHPUnit_Framework_TestCase {

  private $fizzbuzz;

  function __construct() {
    
    $this->fizzbuzz = new Fizzbuzz();
  }
  
  function testResultShouldBeOne()
    
  {
    //for test result that equals executable of 1, (1) from src, return ok for test if it is correct.
    $result = $this->fizzbuzz->execute(1);
    $this->assertEquals($result, '1');
  }
  
  function testResultShouldBeTwo()
    
  {
    //for test result that equals executable of 2, (2) from src, return ok for test if it is correct.
    $result = $this->fizzbuzz->execute(2);
    $this->assertEquals($result, '2');
    
  }
  
  function testResultShouldBeFizz()
    
  {
    //for test result that equals executable of 3, ('fizz') from src, return ok for test if it is correct.
    $result = $this->fizzbuzz->execute(3);
    $this->assertEquals($result, 'fizz');
    
  }
  
  function testResultShouldBeBuzz()
    
  {
    //for test result that equals executable of 5, ('buzz') from src, return result if it is correct.
    $result = $this->fizzbuzz->execute(5);
    $this->assertEquals($result, 'buzz');
    
  }
  
  function testResultShouldAllBePrintedInConsoleIfBothArgsNotEqual()

  {
      //if arg 1 and arg 2 are not equal, return passed result, then show all results.
      $result = $this->fizzbuzz->play();
      $this->assertNotEquals($result, '1, 2, 3, fizz, 4, buzz');

      echo $result;

  }
  
}

 
