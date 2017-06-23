<?php

// Problem Link : https://www.hackerrank.com/challenges/maxsubarray


$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d",$t);

for($i=1;$i<=$t;$i++){
    fscanf($_fp, "%d",$n);
    $fields[] = array_map('trim', explode(" ", fgets($_fp)));
}


function maxSubarrayContiguous($values) {

     $sum = 0;
     $max = $values[0];
 
     foreach( $values as $value) {
        settype($value,'integer');
         $sum +=$value;
     
         /* If sum is less than zero then assign 0 as $sum */
 
         if ($sum < 0)
            $sum = 0;
         elseif ($sum > $max) /* If $sum is greater than $max then assign $sum as $max */
            $max = $sum;
        //find the smallest negative number  
        if ($value >= $max) 
            $max = $value;
   }
 
   return $max;
}

function maxSubarrayNonContiguous($values) {
	$sum = 0;
	$max = $values[0];
	$rtn = 0; // Return Value
    
	foreach($values as $value) {
        settype($value,'integer');
		//store positive numbers
		if ($value >= 0) {
			$sum += $value;
		}
		//find the smallest negative number
		if ($value >= $max) 
            $max = $value;
	}
	if ($sum > 0)
		$rtn = $sum;
	else
		$rtn = $max;

	return $rtn;
		
}
foreach($fields as $field){
    echo maxSubarrayContiguous($field) ." ".maxSubarrayNonContiguous($field);
    echo "\n";
}