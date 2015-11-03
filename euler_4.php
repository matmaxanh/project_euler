// three solution to calculate fibonacci number

function fib($n)
{
  $a = [1,1];
  for($i=2;$i <= ($n-1);$i++)
  {
    $a[$i] = $a[$i-1]+$a[$i-2];
  }

  return $a[$n - 1];
}

function fibo ($n)
{
    if ($n === 1 || $n === 2) 
      return 1;
    return fibo($n - 1) + fibo($n - 2);
}

function getFib($n)
{
  return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
}


echo getFib(13).PHP_EOL;
echo fib(14).PHP_EOL;
echo fibo(15);
