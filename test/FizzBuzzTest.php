<?php

require "test/FizzBuzz.php";
class FizzBuzzTest extends PHPUnit_Framework_TestCase {
private $fizzbuzz;

  function__construct() {
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
      $result = $this->fizzbuzz->execute(4);
      $this->assertEquals($result, 'buzz');
   }
     function testResultShouldDisplayResults()
    {
      $result = $this->fizzbuzz->execute(5);
      $this->assertEquals($result, '1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 buzz');
    }
  }
  
 ?>
