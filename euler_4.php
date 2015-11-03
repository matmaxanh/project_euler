// three solution to calculate fibonacci number

// use math formular
function getFib($n)
{
  return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
}

// use recursive function
function fibonaci($n)
{
  if ($n === 1 || $n === 2) 
    return 1;
  return fibonaci($n - 1) + fibonaci($n - 2);
}

// use memoization : bottom-up
function fiboUp($n)
{
  $a = [1,1];
  for($i=2;$i <= ($n-1);$i++)
  {
    $a[$i] = $a[$i-1]+$a[$i-2];
  }

  return $a[$n - 1];
}

// use moization: top-down
function fiboDown($n, &$computed = array(0,1)) {
    if (!array_key_exists($n,$computed)) {
      $computed[$n] = fiboDown($n-1, $computed) + fiboDown($n-2, $computed);   
    }
    return $computed[$n];
}

echo getFib(13).PHP_EOL;
echo fibonaci(14).PHP_EOL;
echo fiboUp(15).PHP_EOL;
echo fiboDown(16);
