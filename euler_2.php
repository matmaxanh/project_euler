<?php

/**
 * Problem 2: http://projecteuler.net/problem=2
 * 
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 * 
 * @author bluecode
 *
 */


class Euler{
	public $startTime;
	public $endTime;

	public function sumEvenFiboNumber($max){
		$i = $j = 1;
		$sum = 0;
		while($j < $max){
			if($j%2 == 0){
				// echo $j;
				$sum += $j;
			}
			$nextNumber = $i + $j;
			$i = $j;
			$j = $nextNumber;
		}
		return $sum;

	}

	public function sumEvenFiboNumber2($max){
		$a = $b = 1;
		$c = $a + $b;
		$sum = 0;
		while($c < $max){
			$sum += $c;
			$a = $b + $c;
			$b = $c + $a;
			$c = $a + $b;
		}
		return $sum;
	}

	public function excute(){
		return $this->sumEvenFiboNumber(4000000);
	}

	public function run(){
		//place this before any script you want to calculate time
		$time_start = microtime(true);

		//rscipt
 		echo $this->excute();

 		$time_end = microtime(true);

		//dividing with 60 will give the execution time in minutes other wise seconds
		$execution_time = ($time_end - $time_start);

		//execution time of the script
		echo '<br/><b>Total Execution Time:</b> '.$execution_time;
	}

}

$euler = new Euler();
$euler->run();

