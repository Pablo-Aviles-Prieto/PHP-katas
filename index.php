<?php
require './odd_even.php';
require './fizz_buzz_fibonacci.php';
$number = 10;
$fibo_number = 20;
$fiboSeq = fibs_fizz_buzz($fibo_number);
?>

<h1>Hello world</h1>
<p>The number <?= $number ?> is <strong><?= even_or_odd($number) ?></strong></p>
<p>FizzBuzz with Fibonacci sequence for the first <strong><?= $fibo_number ?></strong> numbers:
	<? foreach ($fiboSeq as $fib_number) {
		echo $fib_number . " ";
	} ?></p>
<script>
	console.log(<?= json_encode($number); ?>);
</script>