<?php
function power($num, $n)
{
    if ($n == 0)
        return 1;
    else
        return pow($num, $n/2)*pow($num, $n/2);
}
 
// Function to check power representations recursively
function checkRecursive($x, $n, $curr_num = 1,$curr_sum = 0)
{
    // Initialize number of ways to express
    // x as n-th powers of different natural
    // numbers
    $results = 0;
 
    // Calling power of 'i' raised to 'n'
    $p = power($curr_num, $n);
    $p + $curr_sum;
    while ($p + $curr_sum < $x)
    {
        // Recursively check all greater values of i
        $results += checkRecursive($x, $n, $curr_num+1,$p+$curr_sum);
        $curr_num++;
        $p = power($curr_num, $n);
    }
 
    // If sum of powers is equal to x
    // then increase the value of result.
    echo $p + $curr_sum;
    echo "\n";
    if ($p + $curr_sum == $x)
        $results++;
 
    // Return the final result
    return $results;
}
 
// Driver Code.

    $x = 100;
    $n = 2;
    echo checkRecursive($x, $n);