<?php
// https://www.codewars.com/kata/57bf599f102a39bb1e000ae5
// Recursive works correctly but doesn't pass the final test since exceeds the 12s (timeout)

function fibo_number_recursive($number): int
{
  return ($number === 0 || $number === 1)
    ? $number
    : (fibo_number_recursive($number - 1) + fibo_number_recursive($number - 2));
}

function fibs_fizz_buzz_recursive($n): array
{
  $fibo_array = array();

  for ($i = 1; $i <= $n; $i++) {
    $current_fibo_number = fibo_number_recursive($i);
    if (($current_fibo_number % 3 === 0) && ($current_fibo_number % 5 === 0)) {
      array_push($fibo_array, "FizzBuzz");
      continue;
    }
    if ($current_fibo_number % 3 === 0) {
      array_push($fibo_array, "Fizz");
      continue;
    }
    if ($current_fibo_number % 5 === 0) {
      array_push($fibo_array, "Buzz");
      continue;
    }
    array_push($fibo_array, $current_fibo_number);
  }

  return $fibo_array;
}



$result_fibo = fibs_fizz_buzz_recursive(20);
// print_r($result_fibo);
// echo "</br>";

foreach ($result_fibo as $fib_number) {
  echo $fib_number . " ";
}
?>