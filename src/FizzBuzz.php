<?php

$start = 1;
$end = 100;

  for ($start > $end; $start <= $end; $start++ ) {

  $output = '';

  if ($start % 3 == 0) {

  $output .= 'fizz'."<br>";
  }

  if ($start % 5 == 0) {

  $output .= 'buzz'. "<br>";
  }

  echo $output .= "$start". "<br>";

  }

 ?>
