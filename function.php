<?php
  function sum ($n)
  {
    $sum=0;
    for($i=1;$i<=$n;$i++)
    {
      $sum+=$i;
    }
    return $sum;
  }

  function factorial($n)
  {
      $fact = 1;
      for($i=1;$i<=$n;$i++)
      {
        $fact*=$i;
      }
      return $fact;
  }

  function fib($n)
  {
    //find fibonacci sequence at the 'n'
    $first = 0;
    $second = 1;
    for($i=2;$i<$n;$i++)
    {
      $third = $first + $second;

      //move
      $first = $second;
      $second = $third;
    }
    $fib = $third;
    return $fib;
  }














?>
