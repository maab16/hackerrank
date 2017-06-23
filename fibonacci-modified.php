<?php
 /* Enter your code here. Read input from STDIN. Print output to STDOUT */
 $_fp = fopen("php://stdin", "r");
//get the integer.
$integers = fscanf($_fp, "%d %d %d",$a,$b,$n);
function fibo($a,$b,$n){
    static $i = 3;
    static $result;
    if($n==0) 
        return $b; 
    if($i <= $n){
        $i++;
        $result = bcadd(bcpow($b, 2), $a);
        fibo($b,$result,$n);
    }
    return $result;
}
echo fibo($a,$b,$n);
fclose($_fp);