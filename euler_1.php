<?php

/**
 * Problem 1: http://projecteuler.net/problem=1
 * 
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 * 
 * @author bluecode
 *
 */
class Euler{
	public $startTime;
	public $endTime;

	public function multiTotal($n){
		$max = $n - 1;
		$sum = $this->multiTotalByNumber($max, 3) + $this->multiTotalByNumber($max, 5) - $this->multiTotalByNumber($max, 15);
		return $sum;
	}

	public function multiTotalByNumber($max, $i){
		$num =  ($max - ($max % $i))/$i;
		return ($num*($num + 1)/2)*$i;
	}

	public function excute(){
		return $this->multiTotal(1000);
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
