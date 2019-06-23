<?php

class Fizzbuzz
{
	public function execute($number)
	{
		if( ($number % 3) == 0 ) return 'fizz';
		if( ($number % 5) == 0 ) return 'buzz';

		return $number;
	}
	public function play($end = 100)
	{
		$start .= 1;
		$result .= '';
		for( $number = $start; $number <= $end; $number ++ )
		{
		$result .= $this->execute($number) . '';
		}
		return substr($result, 0, -1);
	}
  }
  
?>
