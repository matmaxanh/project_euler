<?php

/**
 * Problem 3: http://projecteuler.net/problem=3
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

	public 	function isPrime($n){
      	if ($n === 2){
  			return true;
      	}
         
      	if($n % 2 === 0){
         	return false;
      	}
      	$max = sqrt($n);
  		for($i = 3; $i < $max; $i += 2){
     		if($n % $i === 0){
        		return false;
 			}
		}
      	return true;		
   	}

	public function largestPrimeFactor($n) {
		if($n % 2 === 0){
			$lastFactor = 2;
			$n = $n / 2;
			while($n % 2 === 0){
				$n = $n / 2;
			}
		}else{
			$lastFactor = 1;
		}
		$factor = 3;
		$maxFactor = sqrt($n);
		while($n > 1 && $factor <= $maxFactor){
			if($n % $factor === 0){
				echo $n.'     '.$factor.'<br/>';
				$n = $n / $factor;
				$lastFactor = $factor;
				echo $lastFactor.'<br/>';
				while($n % $factor === 0){
					$n = $n / $factor;
				}
				$maxFactor = sqrt($n);
			}
			$factor += 2;
		}
		if($n === 1){
			return $lastFactor;
		}else{
			return $n;
		}
	}

	public function excute(){
		return $this->largestPrimeFactor(600851475143);
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
?>
