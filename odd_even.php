<?php
function even_or_odd(int $n): string
{
  return $n % 2 === 0 ? 'Even' : 'Odd';
}
// echo "Number 15 is <strong>" . even_or_odd(15) . "</strong>"
?>