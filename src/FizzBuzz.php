<?php

class Fizzbuzz
{
	public function execute($number)
	{
		//if multiplied by 3, return fizz
		if( ($number % 3) == 0 ) return 'fizz';
		//if multiplied by 5, return buzz
		if( ($number % 5) == 0 ) return 'buzz';

		return $number;
	}
	public function play($end = 100)
	{
		//begin at number 1
		$start = 1;
		$result = '';
		//for every number from 1 through to 100, add 1 and return that result
		for( $number = $start; $number <= $end; $number ++ )
		{
		$result .= $this->execute($number) . '';
		}
		return substr($result, 0, -1);
	}
  }
  
?>
