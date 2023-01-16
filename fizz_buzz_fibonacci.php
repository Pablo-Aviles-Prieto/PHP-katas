<?php
// https://www.codewars.com/kata/57bf599f102a39bb1e000ae5

function fibs_fizz_buzz($n)
{
  $fibo_array = array();
  $num1 = 0;
  $num2 = 1;

  $counter = 0;
  while ($counter <= $n) {
    if ($counter !== 0) {
      if (($num1 % 3 === 0) && ($num1 % 5 === 0)) {
        array_push($fibo_array, 'FizzBuzz');
      } else if ($num1 % 3 === 0) {
        array_push($fibo_array, 'Fizz');
      } else if ($num1 % 5 === 0) {
        array_push($fibo_array, 'Buzz');
      } else {
        array_push($fibo_array, $num1);
      }
    }
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $counter = $counter + 1;
  }
  return $fibo_array;
}

// print_r(fibs_fizz_buzz(20));
?>
