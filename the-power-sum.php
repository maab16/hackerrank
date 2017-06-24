<?php

// Problem Link : https://www.hackerrank.com/challenges/the-power-sum/problem

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d",$x);
fscanf($_fp, "%d",$n);

function power($num, $n)
{
    if ($n == 0)
        return 1;
    else
        return pow(pow($num, $n/2),2);
}
 
function countPowerSum($x, $n, $num = 1,$sum = 0)
{
    $counter = 0;
 
    $p = power($num, $n);
    while ($p + $sum < $x)
    {
        // Recursively check all greater values of i
        $counter += countPowerSum($x, $n, $num+1,$p+$sum);
        $num++;
        $p = power($num, $n);
    }
    
    // If sum of powers is equal to $x
    // then increase the value of $counter.
    if ($p + $sum == $x)
        $counter++;
 
    // Return the final $counter
    return $counter;
}
 
// Call Code.
echo countPowerSum($x, $n);
?>