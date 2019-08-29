<?php
	require 'MultiplesClass.php';
	
	for($i = 1; $i <= 100; $i++){
		$multiples = [3, 5, (3*5)];
		$multiplesClass = new MultiplesClass($i, $multiples);
		
		echo $multiplesClass->processNumber();
		echo '<br>';
	}
?>




















